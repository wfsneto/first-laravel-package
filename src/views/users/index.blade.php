@if($users->isEmpty())
    {{ trans('User not found') }}!
@else
    @foreach($users as $key => $user)
        <pre><?php print_r($user->getAttributes()) ?></pre> <hr />
    @endforeach
@endif
