<div>
    Tweets
    <p>{{ $messages }}</p>
    <input type="text" name="message" id="message" wire:model="messages">
    <hr>
    @foreach($tweets as $tweet)
    {{ $tweet->user->name }} - {{ $tweet->content }} <br>
    @endforeach
</div>
