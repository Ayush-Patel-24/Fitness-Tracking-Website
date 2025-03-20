<?php
$fitness_tips = [
    "Stay hydrated—drink plenty of water throughout the day.",
    "Aim for at least 30 minutes of exercise daily.",
    "Don't skip warm-up and cool-down sessions.",
    "Incorporate strength training at least twice a week.",
    "Eat a balanced diet with a variety of nutrients.",
    "Get enough sleep to support recovery and overall health.",
    "Focus on form, not just lifting heavy weights.",
    "Include stretching exercises to improve flexibility.",
    "Set achievable fitness goals and track your progress.",
    "Listen to your body and rest when you need to."
];
$random_advice = $fitness_tips[array_rand($fitness_tips)];

// Return the advice as a response
echo $random_advice;
?>
