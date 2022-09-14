<?php 

function validatePost($post) {
    $errors = array();
    if(empty($post['title']) || empty($post['body']) || empty($post['topic_id'])) {
        array_push($errors, 'Preencha todos os campos por favor!');
    }
    
    $postExists = verifyPostExists($post['title']);

    if($postExists != null) {
        if(isset($post["post-btn-upd"]) && $postExists["id"] != $post["id"]) {
            array_push($errors, 'Já existe um Post com esse título! Tente outro, por favor!');
        }
        if(isset($post["post-btn"])) {
            array_push($errors, 'Já existe um Post com esse título! Tente outro, por favor!');
        }
    }

    return $errors;
}