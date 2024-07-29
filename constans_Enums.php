<?php


class BlogPost {
    private Status $status;
    public function getStatus(): Status {
        return $this->status;
    }

    public function setStatus(Status $status): void {
        $this->status = $status;
    }
}


// enum Status {
//     case DRAFT;
//     case PUBLISHED;
//     case UNDER_REVIEW;
// }


//--> This is  Beckt enum
enum Status:int {
    case DRAFT        = 1;
    case PUBLISHED    = 2;
    case UNDER_REVIEW = 3;
}


// final class Status {
//     public const DRAFT = 'draft';
//     public const PUBLISHED = 'published';
//     public const UNDER_REVIEW = 'under_review';
// }


$post = new BlogPost();

$post->setStatus( status: Status::DRAFT );  

if($post->getStatus() === Status::PUBLISHED) {
    //Logic
} 

if($post->getStatus() === 'published') {
    //Logic
}