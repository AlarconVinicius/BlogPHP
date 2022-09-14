<?php 

function validateTopic($topic) {
    $errors = array();
    if(empty($topic['name'])) {
        array_push($errors, 'Preencha o  campo nome, por favor!');
    }
    
    $topicExists = verifyTopicExists($topic['name']);

    if($topicExists != null) {
        if(isset($topic["topic-btn-upd"]) && $topicExists["id"] != $topic["id"]) {
            array_push($errors, 'Esse tópico já existe! Tente outro, por favor!');
        }
        if(isset($topic["topic-btn"])) {
            array_push($errors, 'Esse tópico já existe! Tente outro, por favor!');
        }
    }

    return $errors;
}