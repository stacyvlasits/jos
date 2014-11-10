// -------------
// FILL THESE IN
// -------------
numQuestions = 4;
quizType = 'MultipleChoice'; // YOU MAY CHOOSE 'MultipleChoice', 'FillInTheBlank', 'Matching'


// DO NOT FILL IN
init();


// -------------
// FILL THESE IN
// -------------
questionArray[0] = new questionRecord('一番の質問?', '一番の答え', 3, ['一番の答え','いいえ１','いいえ２']);
questionArray[1] = new questionRecord('二番の質問?', '二番の答え', 4, ['二番の答え','いいえ１','いいえ２','いいえ３']);
questionArray[2] = new questionRecord('三番の質問?', '三番の答え', 4, ['三番の答え','いいえ１','いいえ２','いいえ３']);
questionArray[3] = new questionRecord('四番の質問?', '四番の答え', 2, ['四番の答え','いいえ１']);


// DO NOT FILL IN
showQuiz(quizType);