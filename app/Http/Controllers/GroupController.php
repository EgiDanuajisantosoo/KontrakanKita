<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Message;
use App\Models\GroupUser;
use App\Events\MessageSent;
use App\Models\User;
use App\Models\Kontrakan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::with('messages.user', 'users')->get();
        $checkGroup = GroupUser::where('user_id', Auth::id())->first();
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
    }else {
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
        $groupUser->user_id = auth()->id();
        $groupUser->group_id = $group->id;
        $groupUser->role = 'admin';
        $groupUser->save();
    }


    return redirect('/forums/' . $group->id);
}

public function show($id)
{
    $group = Group::with('messages.user', 'users')->findOrFail($id);
    $groupUser = GroupUser::where('group_id', $id)->where('user_id', Auth::id())->first();
    // $messages = $group->messages()->with('user')->latest()->get();
    $messages = $group->messages()->with('user')->oldest()->get();
    $kontrakan = Kontrakan::where('provinsi', $group->provinsi)
        ->where('kota', $group->kota)
        ->where('kecamatan', $group->kecamatan)
        ->get();
    // dd($kontrakan);
    if ($groupUser) {
        return view('Forum.detailForum', compact('group', 'messages', 'kontrakan'));
    }else{
        return redirect('/forums')->withErrors(['user' => 'User belum terdaftar di group.']);
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
    }else{
        $group = Group::findOrFail($id);
        GroupUser::firstOrCreate([
            'group_id' => $group->id,
            'user_id' => Auth::id(),
            'role' => 'anggota',
        ]);
    }


    return redirect("/forums/{$group->id}")->with('success', 'User added');
}

public function sendMessage(Request $request, $id)
{
    $request->validate(['message' => 'required|string']);

    // Simpan pesan ke database
    $message = Message::create([
        'group_id' => $id,
        'user_id' => auth()->id(),
        'message' => $request->message,
    ]);

    // Kirim event dengan instance Message
    broadcast(new MessageSent($message))->toOthers();

    return redirect()->back();
}
}
