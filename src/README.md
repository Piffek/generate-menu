**By this package you can generate own tree from categories or another subject.**

_USAGE:_

`php artisan vendor:publish` - this command create necessary file (models, view etc).

`php artisan migrate` - create tables in database.

Now you can usage Tree class in your controller, for example:

    public function index()
    {
	    $tree = (new Tree)->generate();
	    return view('categories', $tree);
    }

in view you can use

    @foreach($tree as $child)
        {{ $child->name }} // name of main branch in tree
        @if(count($child->childs)) // if isset childs this branch
        	@include('generateChild', ['childs' => $child->childs])
        @endif

    @endforeach