<section class="resourcelist">
    {!! Form::open(['route' => 'calendar']) !!}
        <section class="resourcelist-date">
            {!! Form::text('date', isset($date) ? $date->format('Y-m-d') : now()->format('Y-m-d'), ['class' => 'field']) !!}
            {!! Form::submit('Show calendar', ['class' => 'btn btn-primary screen-reader']) !!}
        </section>

        <div class="container">
            <ul>
                @each('partials.resource-list.category', $categories, 'category')
                @each('partials.resource-list.resource', $resources, 'resource')
            </ul>
        </div>
    {!! Form::close() !!}

    <a href="#" id="resourcelist-toggle" class="resourcelist-toggle">
        @svg('cheveron-left', ['class' => 'resourcelist-toggle-icon'])
        @svg('cheveron-right', ['class' => 'resourcelist-toggle-icon'])
    </a>
</section>