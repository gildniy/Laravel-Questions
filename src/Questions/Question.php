<?php

namespace DraperStudio\Questions\Questions;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * @var string
     */
    protected $table = 'questions';

    /**
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function questionable()
    {
        return $this->morphTo();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(config('draperstudio.questions.user'), 'author_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bestAnswer()
    {
        return $this->hasOne(Answer::class, 'best_answer_id');
    }
}
