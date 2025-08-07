@props(['size'=>'base','tag'])

@php
$classes = "bg-white/10 hover:bg-white/25 transition-colors font-bold duration-300  rounded-xl ";

if($size == 'base'){
  $classes .= " px-5 py-1 text-sm";
}
else if ($size == 'small'){
    $classes .= " px-3 py-1 text-[9.9px]";
}
 @endphp
<a href="/tags/{{strtolower($tag->name)}}" class="{{$classes}}">{{$tag->name}}</a>
