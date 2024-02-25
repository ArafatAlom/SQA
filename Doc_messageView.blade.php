<div class="media">
    <!-- Avatar link -->
    <a class="pull-left" href="#">
        <!-- Avatar image -->
        <img src="//www.gravatar.com/avatar/{{ md5($message->user->email) }} ?s=64"
             alt="{{ $message->user->name }}" class="img-circle">
    </a>
    <div class="media-body">
        <!-- User's name -->
        <h5 class="media-heading">{{ $message->user->name }}</h5>
        <!-- Message body -->
        <p>{{ $message->body }}</p>
        <div class="text-muted">
            <!-- Timestamp -->
            <small>Posted {{ $message->created_at->diffForHumans() }}</small>
        </div>
    </div>
</div>
