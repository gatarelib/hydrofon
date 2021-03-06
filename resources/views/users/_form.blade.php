<div class="mb-4">
    {!! Form::label('name', 'Name', ['class' => 'label']) !!}
    {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'field']) !!}
</div>

<div class="mb-4">
    {!! Form::label('email', 'E-mail', ['class' => 'label']) !!}
    {!! Form::email('email', null, ['placeholder' => 'E-mail', 'class' => 'field']) !!}
</div>

<div class="mb-4">
    {!! Form::label('password', 'Password', ['class' => 'label']) !!}
    {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'field']) !!}
</div>

<div class="mb-4">
    {!! Form::label('password_confirmation', 'Confirm password', ['class' => 'label']) !!}
    {!! Form::password('password_confirmation', ['placeholder' => 'Confirm password', 'class' => 'field']) !!}
</div>

@if(\Hydrofon\Group::count() > 0)
    <div class="mb-6">
        {!! Form::label('groups', 'Groups', ['class' => 'label']) !!}
        {!! Form::select('groups', \Hydrofon\Group::pluck('name', 'id'), isset($user) ? $user->groups->pluck('id') : [], ['multiple' => true, 'class' => 'field']) !!}
    </div>
@endif

<div class="mt-6">
    <a href="{{ request()->headers->get('referer') }}" class="btn btn-link">Cancel</a>
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>