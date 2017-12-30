<ul>
    @foreach($childs as $child)
        <li>
            {{$child->name}}
            @if(count($child->child))
                @include('generateChild', ['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>