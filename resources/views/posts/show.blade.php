<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
 <x-app-layout>
  <x-slot name="header">
      dashboard
  </x-slot>
    <body class="antialiased">
        <h1 class='title'>
            {{ $post->title }}
        </h1>
        <div class='content'>
             <div class='content_post'>
                <h3>本文</h3>
                <p class='body'>{{ $post->body }}</p>
             </div>
        </div>
        <div class='edit'>
    　　      <a href="/posts/{{ $post->id }}/edit">edit</a>
    　　</div>
    　　<div class='footer'>
    　　      <a href="/">戻る</a>
    　　</div>
    　　<a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
    </body>
 </x-app-layout>
</html> 