<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OpenAI\Laravel\Facades\OpenAI;
class ChatbotResponse extends Model
{
    use HasFactory;
    
    protected $table = 'chatbot_responses';

    protected $fillable = ['keyword', 'response'];
}