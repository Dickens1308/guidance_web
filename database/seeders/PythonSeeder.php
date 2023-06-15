<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Topic;
use Illuminate\Database\Seeder;
use App\Models\Course;
use Illuminate\Support\Str;


class PythonSeeder extends Seeder
{
    private function createCourse($title, $desc, $subDesc): void
    {
        Course::create([
            'title' => $title,
            'slug' => Str::slug($title),
            "desc" => $desc,
            "sub_desc" => $subDesc,
            'language_id' => 1,
        ]);
    }

    private function createTopics($id, $title, $video, $title2, $desc, $desc2, $example, $explain, $practise): void
    {
        Topic::create([
            'title' => $title,
            'slug' => Str::slug($title),
            'course_id' => $id,
            'video_url' => $video,
            'learning_title' => $title2,
            'learning_desc' => $desc,
            'learning_desc_sub' => $desc2,
            "code_example" => $example,
            "code_explanation" => $explain,
            "code_practise" => $practise,
        ]);
    }


    private function createQuestion($title, $a, $b, $c, $correct, $image, $topicId): void
    {
        Question::create([
            'title' => $title,
            'slug' => Str::slug($title),
            'choice_one' => $a,
            'choice_two' => $b,
            'choice_three' => $c,
            'correct_answer' => $correct,
            'code_image_url' => $image,
            'topic_id' => $topicId,
        ]);
    }

    public function run(): void
    {
        /**************************PYthon Course 1 Start *******************************/
        $this->createCourse(
            title: "Introduction to Python",
            desc: null,
            subDesc: null
        );

        //Python Topics 1
        $this->createTopics(
            id: 1,
            title: "Introduction to python",
            video: "https://firebasestorage.googleapis.com/v0/b/ehabari-76416.appspot.com/o/1.%20What%20is%20Python%20%20Python%20for%20Kids%20%20Python%20Coding%20for%20Kids%20%20Coding%20for%20Kids%20%20Kids%20Coding%20%20Coding_1080p.mp4?alt=media&token=1c9fd0ec-6ab5-4dab-8416-abd15b775ab7&_gl=1*1rs3hbh*_ga*MTI3NDUyMTA4NC4xNjg2NjUxNDY1*_ga_CW55HF8NVT*MTY4NjY1MTQ2NS4xLjEuMTY4NjY1MjM1NC4wLjAuMA..",
            title2: "Introduction to python",
            desc: "Python is a popular programming language used by people all over the world to create all sorts of things, from simple games and quizzes to complex software and websites.",
            desc2: "Python is a great language for kids because it's easy to learn and use, yet powerful enough to create all sorts of cool things. It's also a very popular language, which means there are lots of resources available for learning and getting help.",
            example: null,
            explain: null,
            practise: null,
        );

        //Topic 1 Questions
        $this->createQuestion(
            title: "What is Python used for?",
            a: "Creating games and quizzes",
            b: "Writing letters and emails",
            c: "None of the above",
            correct: "a",
            image: null,
            topicId: 1
        );

        /**************************PYthon Course 1 End *******************************/

        /**************************PYthon Course 2 Start *******************************/
        $this->createCourse(
            title: "Variables",
            desc: null,
            subDesc: null
        );

        //Python Topics 1
        $this->createTopics(
            id: 2,
            title: "Varialbes",
            video: "https://firebasestorage.googleapis.com/v0/b/ehabari-76416.appspot.com/o/2.%20Coding%20For%20Kids%2C%20Kids%20Python%20101%20Chapter%204%20Variables_720p.mp4?alt=media&token=6e9761bf-d041-494f-b5ba-2a0d0d9443c5&_gl=1*1wnp7yq*_ga*MTI3NDUyMTA4NC4xNjg2NjUxNDY1*_ga_CW55HF8NVT*MTY4NjY1MTQ2NS4xLjEuMTY4NjY1MjQ3My4wLjAuMA..",
            title2: "Understanding variables",
            desc: "In Python, a variable is like a container that can hold a value, just like a box can hold an object. You can give a variable any name you like, as long as it follows some rules. Once you create a variable and give it a value, you can use the variable in your code to do different things.",
            desc2: "Here's an example of how to create a variable and assign a value to it:",
            example: "# Creating a variable called 'score' \n# and assigning a value of 10 \n\nscore = 10",
            explain: "In this example, we created a variable called score and assigned it a value of 10. Now, we can use the score variable in our code to represent the value 10. For example:",
            practise: "#Printing the value of the 'score' \n#variable \n\nprint(score) \n\nThis will output: 10"
        );

        //Topic 1 Questions
        $this->createQuestion(
            title: "What is a variable in Python?",
            a: "A container that can hold a value",
            b: "A type of fruit",
            c: "A type of animal",
            correct: "a",
            image: null,
            topicId: 2
        );

        $this->createQuestion(
            title: "What are some rules for naming variables in Python?",
            a: "Variable names can only have letters",
            b: "Variable names can have letters, numbers, and underscores",
            c: "Variable names can have spaces",
            correct: "b",
            image: null,
            topicId: 2
        );

        $this->createQuestion(
            title: "What is the value of the 'score' variable in the following code?",
            a: "10",
            b: "15",
            c: "20",
            correct: "b",
            image: "score = 15",
            topicId: 2
        );

        /**************************PYthon Course 2 End *******************************/

        /**************************PYthon Course 3 Start *******************************/
        $this->createCourse(
            title: "Data Types",
            desc: "In Python, data types are like different types of boxes that can hold different types of values. Some common data types in Python include:",
            subDesc: "Integer: a whole number, such as 5 or -10 \n\nFloat: a decimal number, such as 3.14 or -2.5 \n\nString: a series of characters, such as 'Hello, world!' \n\nBoolean: a value that is either True or False"
        );

        //Python Topics 1
        $this->createTopics(
            id: 3,
            title: "Integer",
            video: null,
            title2: "Understanding Integers",
            desc: "An integer is a whole number, such as 5 or -10. Integers can be used in mathematical operations such as addition, subtraction, multiplication, and division. Here's an example of how to create an integer variable in Python:",
            desc2: null,
            example: "#Creating an integer variable \n\nmy_integer = 5",
            explain: null,
            practise: null
        );

        $this->createQuestion(
            title: "What is an integer in Python?",
            a: "A decimal number",
            b: "A whole number",
            c: "A series of characters",
            correct: "b",
            image: null,
            topicId: 3,
        );

        $this->createQuestion(
            title: "What is the value of the following variable in Python?",
            a: "5",
            b: "-10",
            c: "10",
            correct: "c",
            image: "my_variable = 10",
            topicId: 3
        );

        $this->createQuestion(
            title: "What is the result of the following mathematical operation in Python?",
            a: "15",
            b: "510",
            c: "50",
            correct: "a",
            image: "5 + 10",
            topicId: 3
        );


        //Python Topics 2
        $this->createTopics(
            id: 3,
            title: "Float",
            video: null,
            title2: "Understanding Float",
            desc: "A float is a decimal number, such as 3.14 or -2.5. Floats can also be used in mathematical operations. Here's an example of how to create a float variable in Python:",
            desc2: null,
            example: "#Creating a float variable \n\nmy_float = 3.14",
            explain: null,
            practise: null
        );

        $this->createQuestion(
            title: "What is a float in Python?",
            a: "A decimal number",
            b: "A whole number",
            c: "A series of characters",
            correct: "a",
            image: null,
            topicId: 4
        );

        $this->createQuestion(
            title: "What is the value of the following variable 'my_variable' in Python?",
            a: "3",
            b: "3.5",
            c: "5",
            correct: "b",
            image: "my_variable = 3.5",
            topicId: 4
        );

        $this->createQuestion(
            title: "What is the result of the following mathematical operation in Python?",
            a: "10",
            b: "9.5",
            c: "8",
            correct: "a",
            image: "2.5 * 450",
            topicId: 4
        );


        //Python Topics 3
        $this->createTopics(
            id: 3,
            title: "String",
            video: null,
            title2: "Understanding String",
            desc: "A string is a series of characters, such as 'Hello, world!' Strings are used to represent text in Python. Here's an example of how to create a string variable in Python:",
            desc2: null,
            example: "# Creating a string variable \n\nmy_string = 'Hello, world!'",
            explain: null,
            practise: null
        );

        $this->createQuestion(
            title: "What is a string in Python?",
            a: "A decimal number",
            b: "A whole number",
            c: "A series of characters",
            correct: "c",
            image: null,
            topicId: 5
        );

        $this->createQuestion(
            title: "What is the value of the following variable 'my_variable' in Python?",
            a: "Python",
            b: "3.4",
            c: "True",
            correct: "a",
            image: "my_variable = 'Python'",
            topicId: 5
        );

        $this->createQuestion(
            title: "What is the result of the following mathematical operation in Python?",
            a: "Hello world!",
            b: "Hello",
            c: "world!",
            correct: "a",
            image: "my_string = 'Hello' \n\nprint(my_string + ' world!')",
            topicId: 5
        );

        //Python Topics 4
        $this->createTopics(
            id: 3,
            title: "Boolean",
            video: null,
            title2: "Understanding Boolean Data Type",
            desc: "Boolean data type is a data type that can have one of two possible values: True or False. It's commonly used in conditional statements, which allow you to execute different pieces of code based on whether a certain condition is True or False.",
            desc2: "Here's an example of how to create variables of Boolean data type:",
            example: "#Creating variables of Boolean data type \n\nmy_boolean1 = True \n\nmy_boolean2 = False",
            explain: null,
            practise: null
        );

        $this->createQuestion(
            title: "What is a Boolean data type in Python?",
            a: "A type of fruit",
            b: "A type of container that can hold different types of values",
            c: "A data type that can have one of two possible values: True or False",
            correct: "c",
            image: null,
            topicId: 6
        );

        $this->createQuestion(
            title: "In which type of statements Boolean data type is commonly used?",
            a: "Conditional statements",
            b: "Looping statements",
            c: "Variable declaration statements",
            correct: "a",
            image: null,
            topicId: 6
        );

        $this->createQuestion(
            title: "What is the value of the following Boolean variable in Python?",
            a: "True",
            b: "False",
            c: "Neither True nor False",
            correct: "a",
            image: "my_boolean = True",
            topicId: 6
        );


        /**************************PYthon Course 3 End *******************************/


        /**************************PYthon Course 4 Start *******************************/
        $this->createCourse(
            title: "Loops",
            desc: "Loops allow you to repeat a set of instructions a certain number of times or until a certain condition is met. There are two types of loops in Python: 'For Loop' and 'While Loop'.",
            subDesc: null,
        );

        //Python Topics 1
        $this->createTopics(
            id: 4,
            title: "For Loop",
            video: 'https://firebasestorage.googleapis.com/v0/b/ehabari-76416.appspot.com/o/3.%20Coding%20For%20Kids%2C%20Kids%20Python%20101%20Chapter%208%20For%20Loop%20Statements_720p.mp4?alt=media&token=2737ad67-b3fc-48ac-8f5d-fe78c56719e1&_gl=1*oqhhnp*_ga*MTI3NDUyMTA4NC4xNjg2NjUxNDY1*_ga_CW55HF8NVT*MTY4NjY1MTQ2NS4xLjEuMTY4NjY1MjUwMi4wLjAuMA..',
            title2: "Understanding For Loop",
            desc: "A for loop is used to loop through a sequence (such as a list, tuple, or string) and execute the same code for each item in the sequence.",
            desc2: "Here's an example of a for loop that prints the numbers from 1 to 5:",
            example: "#Using a for loop to print numbers from 1 to 5 \n\nfor i in range(1, 6): \nprint(i)",
            explain: "In this example, the range() function creates a sequence of numbers from 1 to 5 (excluding 6), and the for loop iterates through each number in the sequence and prints it.",
            practise: null
        );

        $this->createQuestion(
            title: "What is a for loop in Python?",
            a: "A control structure that allows you to repeat a set of instructions a certain number of times or until a certain condition is met",
            b: "A type of data that can have one of two possible values: True or False",
            c: "A type of fruit",
            correct: "a",
            image: null,
            topicId: 7,
        );

        $this->createTopics(
            id: 4,
            title: "While Loop",
            video: 'https://firebasestorage.googleapis.com/v0/b/ehabari-76416.appspot.com/o/4.%20While%20loop%20in%20Python%20%20Animated%20Video_1080p.mp4?alt=media&token=b545f64d-0d75-498c-af7a-cbd61b9277f0&_gl=1*1yypxc6*_ga*MTI3NDUyMTA4NC4xNjg2NjUxNDY1*_ga_CW55HF8NVT*MTY4NjY1MTQ2NS4xLjEuMTY4NjY1MjU3Ni4wLjAuMA..',
            title2: "Understanding While Loop",
            desc: "A while loop is used to repeat a set of instructions as long as a certain condition is true.",
            desc2: "Here's an example of a while loop that prints the numbers from 1 to 5:",
            example: "# Using a while loop to print numbers from 1 to 5 \ni=1 \nwhile \n\ni <= 5: \n\nprint(i) i += 1",
            explain: "In this example, the while loop repeats as long as the variable i is less than or equal to 5. The code inside the loop prints the current value of i, and then increments i by 1.",
            practise: null
        );

        $this->createQuestion(
            title: "What is a while loop in Python?",
            a: "A control structure that allows you to repeat a set of instructions a certain number of times or until a certain condition is met",
            b: "A type of data that can have one of two possible values: True or False",
            c: "A type of fruit",
            correct: "a",
            image: null,
            topicId: 8,
        );
        /**************************PYthon Course 4 End *******************************/

        /**************************PYthon Course 5 Start *******************************/
        $this->createCourse(
            title: "Conditional Statements",
            desc: "Conditional statements allow you to control the flow of your program based on certain conditions. There are three types of conditional statements in Python: if statement, if-else statement, and if-elif-else statement.",
            subDesc: null,
        );

        //Python Topics 1
        $this->createTopics(
            id: 5,
            title: "If Statement",
            video: null,
            title2: "Understanding If Statement",
            desc: "An if statement is used to execute a block of code if a certain condition is true.",
            desc2: "Here's an example of an if statement that checks if a number is positive:",
            example: "#Using an if statement to check if a number is positive \n\nnum = 5 \nif num > 0: \n\t\tprint('The number is positive')",
            explain: "In this example, the if statement checks if the variable num is greater than 0. If the condition is true, the code inside the if block (in this case, the print statement) is executed.",
            practise: null
        );

        $this->createQuestion(
            title: "What is an if statement in Python?",
            a: " A control structure that allows you to execute a block of code if a certain condition is true",
            b: "A type of data that can have one of two possible values: True or False",
            c: "A type of fruit",
            correct: "a",
            image: null,
            topicId: 9,
        );

        $this->createTopics(
            id: 5,
            title: "If-Else Statement",
            video: null,
            title2: "Understanding If-Else Statement",
            desc: "An if-else statement is used to execute one block of code if a certain condition is true, and another block of code if the condition is false.",
            desc2: "Here's an example of an if-else statement that checks if a number is positive or negative:",
            example: "#Using an if-else statement to check if a number is positive or negative \n\nnum = -3 \nif num > 0: \n\t\t\tprint('The number is positive') \nelse: \n\t\t\tprint('The number is negative')",
            explain: "In this example, the if statement checks if the variable num is greater than 0. If the condition is true, the code inside the if block (in this case, the first print statement) is executed. If the condition is false, the code inside the else block (in this case, the second print statement) is executed.",
            practise: null
        );

        $this->createQuestion(
            title: "What is an if-else statement in Python?",
            a: "A control structure that allows you to execute one block of code if a certain condition is true, and another block of code if the condition is false",
            b: "A type of data that can have one of two possible values: True or False",
            c: "A type of fruit",
            correct: "a",
            image: null,
            topicId: 10,
        );


        $this->createTopics(
            id: 5,
            title: "If-Elif-Else Statement",
            video: null,
            title2: "Understanding If-Elif-Else Statement",
            desc: "An if-elif-else statement is used to execute different blocks of code based on different conditions.",
            desc2: "Here's an example of an if-elif-else statement that checks the grade of a student:",
            example: "#Using an if-elif-else statement to check the grade of a student \nscore = 75 \nif score >= 90: \n\t\t\tgrade = 'A' \nelif score >= 80: \n\t\t\tgrade = 'B' \nelif score >= 70: \n\t\t\tgrade = 'C' \nelif score >= 60: \n\t\t\tgrade = 'D' \nelse: \n\t\t\tgrade = 'F' \nprint('Your grade is', grade)",
            explain: "In this example, the if-elif-else statement checks the value of the variable score and assigns a grade based on the value. If the score is greater than or equal to 90, the grade is 'A'. If the score is greater than or equal to 80, the grade is 'B', and so on.",
            practise: null
        );

        $this->createQuestion(
            title: "What is an if-else statement in Python?",
            a: "A type of data that can have one of two possible values: True or False",
            b: "A control structure that allows you to execute one block of code if a certain condition is true, and another block of code if the condition is false",
            c: "A type of fruit",
            correct: "b",
            image: null,
            topicId: 11,
        );

        /**************************PYthon Course 5 End *******************************/
    }
}