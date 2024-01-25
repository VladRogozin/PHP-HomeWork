<?php

namespace MyTodo;

enum StatusEnum: string
{
    case NOT_COMPLETED = 'не виконано';
    case COMPLETED = 'виконано';
}