@if ($user->nuptk ?? "")
<div class="update-account" onclick="window.location.href ='{{route('update_guru_show', $user->id)}}'">UPDATE ACCOUNT?
</div>
@endif

@if (!$user->nuptk && !$user->nisn && $user->username && $user->password)
<div class="update-account" onclick="window.location.href ='{{route('update_admin_show')}}'">UPDATE ACCOUNT?
</div>
@endif

@if($user->nisn ?? "")
<div class="update-account" onclick="window.location.href ='{{route('update_siswa_show', $user->id)}}'">
    UPDATE ACCOUNT?</div>
@endif