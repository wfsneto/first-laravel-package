@if($users->isEmpty())
    {{ trans('User not found') }}!
@else
    @foreach($users as $key => $user)
        {{ $user }} <hr />
    @endforeach
@endif
