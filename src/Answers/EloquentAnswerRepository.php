<?php

namespace Gildniy\Questions\Answers;

/**
 * Class EloquentAnswerRepository.
 */
class EloquentAnswerRepository extends EloquentRepository implements AnswerRepository
{
    /**
     * @param Answer $model
     */
    public function __construct(Answer $model)
    {
        parent::__construct($model);
    }
}
