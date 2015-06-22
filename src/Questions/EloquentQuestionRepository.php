<?php

namespace Gildniy\Questions\Questions;

/**
 * Class EloquentQuestionRepository.
 */
class EloquentQuestionRepository extends EloquentRepository implements QuestionRepository
{
    /**
     * @param Question $model
     */
    public function __construct(Question $model)
    {
        parent::__construct($model);
    }
}
