# A note on data organization
## Ideal data organization
My ideal data organization would look something like this:

Survey questions would be dynamic. These questions would be defined like this:
* A "SurveyDefinition" consists of an `id` and a `title`
* A "QuestionDefinition" consists of an `id`, a `survey_definition_id`, and the `question_text`
* An "AnswerDefinition" consists of an `id`, a `question_definition_id`, and the `answer_text`

Users would be able to fill out these predefined surveys, and we should store that like so:
* There's a concept of "User" (`email`, `id`, etc)
* Each "Survey" consists of an `id`, a `user_id`, and a `survey_definition_id`
* There's a number of "Answer"s for each "Survey" that a "User" fills out. An "Answer" consists of a `survey_id`, a `question_definition_id`, a `user_id`, and an `answer_definition_id`.

## Real data organization
In reality, I was short on time, so didn't make survey questions dynamnic. This resulted in storing a lot of question-answer relationships in static arrays.

My data model is more like this:
* There's a concept of "User" (`email`, `id`, etc)
* There's a number of "Answer"s for each "Survey" that a "User" fills out. An "Answer" consists of an `id`, `question_type`, a `user_id`, and an `answer`.

This will make adding additional questions, answers, or separate surveys a pain, since it would require a code change in multiple files.