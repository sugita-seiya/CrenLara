<h3>ユーザ一覧</h3>
@foreach ($data as $user)
    <p>投稿者: {{$user->user->name}}, 投稿内容: {{$user->contant}}</p>
@endforeach

<!-- <h2>UserId:1, name: seiya</h2> -->


<h3>ユーザ投稿リクエスト</h3>
<form action="#" method="post">
    @csrf
    <input type="input" name="name">
    <input type="submit">
</form>