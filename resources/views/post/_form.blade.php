{{-- 把edit.blade.php 和create.blade.php中重複的部分移到_form.blade.php --}}
<p>
    <label>Title</label>
    {{-- old{{ name }}讓輸入的錯誤可以被修正 --}}
    {{-- $post->title ?? null 的意思是 如果有$post->title 則顯示沒有則為null --}}
    <input type="text" name="title" value={{ old('title',$post->title ?? null) }}>
    <label>Content</label>
    <input type="text" name="content" value={{ old('content',$post->content ?? null)}}>
</p>
{{-- 顯示表單中錯誤訊息 --}}
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif