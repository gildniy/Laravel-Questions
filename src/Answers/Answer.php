<?php

namespace Gildniy\Questions\Answers;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * @var string
     */
    protected $table = 'answers';

    /**
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(config('gildniy.questions.user'), 'author_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
