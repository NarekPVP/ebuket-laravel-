<ul class="list-group list-group-flush">
    @foreach($lists as $list)
        <li class="list-group-item">
            <button type="button" class="btn btn-outline-success set-flower-name" data-title="{{ $list->title }}">{{ $list->title }}</button>
        </li>
    @endforeach
</ul>
