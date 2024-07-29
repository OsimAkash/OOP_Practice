
<?php 

// Trait 
// Composition  , Inheritance
// 
class Post 
{
    use Shareable;
}


class Comment 
{
    use Shareable;  
}


trait Shareable 
{
    public function share() {
        printf(format:"Shared to social media");
    }
}

$post = new Post();
$post->share();

$comment = new Comment();   
$comment->share();