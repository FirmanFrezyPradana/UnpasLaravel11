<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
  <p class="text-xl">Welome to myBlog</p>
  @foreach($posts as $post)
  <article class="py-8 max-w-screen-md border-b border-gray-500">
    <a href="/posts/{{$post['id']}}" class="hover:underline">
      <h2 class="mb-1 text-3xl tracking-tighter font-bold text-gray-600" >{{$post['title']}}</h2>
    </a>
    <div class=" text-base text-gray-500">
      <a href="#" >{{$post['author']}}</a> | 1 juli 2024
    </div >
    <p class="my-4 font-light">{{Str::limit($post['body'],150)}}</p>
    <a href="/posts/{{$post['id']}} "  class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
  </article>
  @endforeach
</x-layout>