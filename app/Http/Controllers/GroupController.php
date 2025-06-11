<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Message;
use App\Models\GroupUser;
use App\Events\MessageSent;
use App\Models\User;
use App\Models\Kontrakan;
use App\Models\Booking;
use App\Models\TransaksiDp;
use App\Models\TransaksiPelunasan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::with('messages.user', 'users','usersDiterima')->get();
        $checkGroup = GroupUser::where('user_id', Auth::id())->first();
        // dd($groups);
        // dd($checkGroup);
        // dd($checkGroup);
        return view('PencariKontrakan.Forum', compact('groups', 'checkGroup'));
    }

    public function create()
    {
        return view('Forum.FormForum');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_group' => 'required|string',
            'deskripsi' => 'required|string',
            'jumlah_anggota' => 'required|integer',
            'jenis_kelamin' => 'required|string',
            'provinsi' => 'required|string',
            'kota' => 'required|string',
            'kecamatan' => 'required|string',
            'foto_group' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // dd($request->all());
        $checkGroup = GroupUser::where('user_id', Auth::id())->first();

        // dd($checkGroup);
        if ($checkGroup) {
            return redirect()->back()->withErrors(['user' => 'User sudah terdaftar di group.']);
        } else {
            $group = new Group();
            $group->nama_group = $request->nama_group;
            $group->deskripsi = $request->deskripsi;
            $group->jumlah_anggota = $request->jumlah_anggota;
            $group->jenis_kelamin = $request->jenis_kelamin;
            $group->provinsi = $request->provinsi;
            $group->kota = $request->kota;
            $group->kecamatan = $request->kecamatan;
            $group->latitude = $request->latitude;
            $group->longitude = $request->longitude;
            $group->save();

            // Handle file upload if needed
            if ($request->hasFile('foto_group')) {
                $file = $request->file('foto_group');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images'), $filename);
                $request->merge(['foto_group' => $filename]);
                $group->foto_group = $filename;
                $group->save();
            }

            $groupUser = new GroupUser();
            $groupUser->user_id = Auth::id();
            $groupUser->group_id = $group->id;
            $groupUser->role = 'admin';
            $groupUser->status = 'diterima';
            $groupUser->save();
        }


        return redirect('/forums/' . $group->id);
    }

    public function show($id)
    {
        $group = Group::with('messages.user', 'users')->findOrFail($id);
        $groupUser = GroupUser::where('group_id', $id)->get();
        $groupCheck = GroupUser::where('group_id', $id)->where('user_id', Auth::id())->first();
        $messages = $group->messages()->with('user')->oldest()->get();
        $booking = Booking::with('kontrakan')->where('group_id', $id)->first();
        $transaksiDp = TransaksiDp::where('user_id', Auth::id())->first();
        $tranasksiPelunasan = TransaksiPelunasan::where('user_id', Auth::id())->first();

        // dd(optional($booking)->count());
        $transaksiPelunasan = TransaksiPelunasan::where('user_id', Auth::id())->first();
        // dd($transaksiDp);
        $kontrakan = Kontrakan::where('provinsi', $group->provinsi)
            ->where('kota', $group->kota)
            ->where('kecamatan', $group->kecamatan)
            ->get();
        // dd($kontrakan);
        if ($groupCheck->status == 'diterima') {
            return view('Forum.detailForum', compact('tranasksiPelunasan','transaksiPelunasan','transaksiDp','group', 'groupCheck', 'groupUser', 'messages', 'kontrakan', 'booking'));
        } else {
            return redirect('/forums')->withErrors(['user' => 'User sudah terdaftar di group.']);
        }
        // dd($messages);
    }

    public function addUserForm($id)
    {
        $group = Group::findOrFail($id);
        $users = User::all();
        return view('groups.add-user', compact('group', 'users'));
    }

    public function gabungGroup($id)
    {
        // dd($id);
        $checkGroup = GroupUser::where('user_id', Auth::id())->first();

        if ($checkGroup) {
            return redirect()->back()->withErrors(['user' => 'User sudah terdaftar di group.']);
        } else {
            $group = Group::findOrFail($id);
            GroupUser::firstOrCreate([
                'group_id' => $group->id,
                'user_id' => Auth::id(),
                'role' => 'anggota',
            ]);
        }


        return redirect("/forums")->with('success', 'User added');
    }

    public function sendMessage(Request $request, $id)
    {
        $request->validate(['message' => 'required|string']);

        // Simpan pesan ke database
        $message = Message::create([
            'group_id' => $id,
            'user_id' => Auth::id(),
            'message' => $request->message,
        ]);

        // Kirim event dengan instance Message
        broadcast(new MessageSent($message))->toOthers();

        return redirect()->back();
    }

    public function terimaUser(Request $request, $id)
    {
        // dd($id);
        $groupUser = GroupUser::where('user_id', $id)->firstOrFail();
        // $group = Group::findOrFail($groupUser->group_id);
        // dd($group);
        if ($groupUser) {
            $groupUser->status = 'diterima';
            $groupUser->save();
        }

        return redirect("/forums/{$groupUser->group_id}")->with('success', 'User accepted');
    }
}
