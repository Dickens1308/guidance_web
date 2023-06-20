<?php

namespace Database\Seeders;


use App\Models\Course;
use App\Models\Question;
use App\Models\Topic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class RubySeeder extends Seeder
{
    public function run(): void
    {
        /**************************Ruby Course 6 Start *******************************/
        $this->createCourse(
            title: "Ruby Tutorial",
            desc: null
        );

        //Ruby Topics 12
        $this->createTopics(
            id: 6,
            title: "Ruby Tutorial",
            video: null,
            title2: "Introduction to Ruby",
            desc: "Ruby is a scripting language designed by Yukihiro Matsumoto, also known as Matz. It runs on a variety of platforms, such as Windows, Mac OS, and the various versions of UNIX. This tutorial gives a complete understanding on Ruby.",
            desc2: "Audience \nThis tutorial has been prepared for beginners to help them understand the basic to advanced concepts related to Ruby Scripting languages",
            example: null,
            explain: null,
            practise: null,
            first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );

        //Topic 12 Questions
        $this->createQuestion(
            title: "Who designed the Ruby programming language?",
            a: " Guido van Rossum",
            b: " Bjarne Stroustrup",
            c: "Yukihiro Matsumoto",
            correct: "c",
            image: null,
            topicId: 12
        );

        /**************************Ruby Course 6 End *******************************/

        /**************************Ruby Course 7 Start *******************************/
        $this->createCourse(
            title: "Ruby - Environment Setup",
            desc: null
        );

        //Ruby Topics 13
        $this->createTopics(
            id: 7,
            title: "Local Environment Setup",
            video: "https://firebasestorage.googleapis.com/v0/b/ehabari-76416.appspot.com/o/1.%20Ruby%20Programming%20-%201%20-%20Install%20Ruby%20and%20Editor(720P_HD).mp4?alt=media&token=4bb589e6-2420-46b4-a379-13a101b2a6ad&_gl=1*11hn9vf*_ga*MTI3NDUyMTA4NC4xNjg2NjUxNDY1*_ga_CW55HF8NVT*MTY4NjY3NDk4NC4yLjEuMTY4NjY3NjE1My4wLjAuMA..",
            title2: "Local Environment Setup",
            desc: "If you are still willing to set up your environment for Ruby programming language, then let's proceed. This tutorial will teach you all the important topics related to environment setup.",
            desc2: "Popular Ruby Editors \nTo write your Ruby programs, you will need an editor If you are working on Windows machine, then you can use any simple text editor like Notepad or Edit plus. \n\nVIM (Vi IMproved) is a very simple text editor. This is available on almost all Unix machines and now Windows as well. Otherwise, your can use your favorite vi editor to write Ruby programs. \n\nRubyWin is a Ruby Integrated Development Environment (IDE) for Windows. \n\nRuby Development Environment (RDE) is also a very good IDE for windows users",
            example: null,
            explain: null,
            practise: null,
            first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );

        /**************************Ruby Course 7 End *********************************/


        /**************************Ruby Course 8 Start *******************************/
        $this->createCourse(
            title: "Ruby - Syntax",
            desc: null
        );

        //Ruby Topics 14
        $this->createTopics(
            id: 8,
            title: "Ruby - Syntax",
            video: "https://firebasestorage.googleapis.com/v0/b/ehabari-76416.appspot.com/o/1.%20Ruby%20Programming%20-%201%20-%20Install%20Ruby%20and%20Editor(720P_HD).mp4?alt=media&token=4bb589e6-2420-46b4-a379-13a101b2a6ad&_gl=1*11hn9vf*_ga*MTI3NDUyMTA4NC4xNjg2NjUxNDY1*_ga_CW55HF8NVT*MTY4NjY3NDk4NC4yLjEuMTY4NjY3NjE1My4wLjAuMA..",
            title2: "Local Environment Setup",
            desc: "Let us write a simple program in ruby. All ruby files will have extension .rb. So, put the following source code in a test.rb file.",
            desc2: "Here, we assumed that you have Ruby interpreter available in /usr/bin directory. Now, try to run this program as follows",
            example: "\t#!/usr/bin/ruby -w \n\n\tputs 'Hello, Ruby!'",
            explain: "\$ruby test.rb \n\n This will produce the following result  \n\t\t Hello, Ruby!",
            practise: null,
            first: "#!/usr/bin/ruby -w",
            second: "\t\tputs 'Hello, Ruby!'",
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );

        /**************************Ruby Course 8 End *******************************/

        /**************************Ruby Course 9 Start *****************************/
        $this->createCourse(
            title: "Ruby - Syntax",
            desc: null
        );

        //Ruby Topics 15
        $this->createTopics(
            id: 9,
            title: "Ruby - Classes and Objects",
            video: "https://firebasestorage.googleapis.com/v0/b/ehabari-76416.appspot.com/o/3.%20Ruby%20Programming%20-%2034%20-%20Ruby%20Classes(720P_HD).mp4?alt=media&token=fa506915-5140-4fa2-b9b6-09816fb74069&_gl=1*17tb8dn*_ga*MTI3NDUyMTA4NC4xNjg2NjUxNDY1*_ga_CW55HF8NVT*MTY4NjY3NDk4NC4yLjEuMTY4NjY3Njg0NS4wLjAuMA..",
            title2: "Ruby - Classes and Objects",
            desc: "Ruby is a perfect Object Oriented Programming Language. The features of the objectoriented programming language include \n\t\tData Encapsulation \n\t\tData Abstraction \n\t\tPolymorphism \n\t\tInheritance \n\n\n An object-oriented program involves classes and objects. A class is the blueprint from which individual objects are created. In object-oriented terms, we say that your bicycle is an instance of the class of objects known as bicycles.",
            desc2: "Take the example of any vehicle. It comprises wheels, horsepower, and fuel or gas tank capacity. These characteristics form the data members of the class Vehicle. You can differentiate one vehicle from the other with the help of these characteristics. \n\n\n A vehicle can also have certain functions, such as halting, driving, and speeding. Even these functions form the data members of the class Vehicle. You can, therefore, define a class as a combination of characteristics and functions. \n\n\nA class Vehicle can be defined as",
            example: "Class Vehicle { \n\t\tNumber no_of_wheels \n\t\tNumber horsepower \n\t\tCharacters type_of_tank \n\t\tNumber Capacity \n\t\tFunction speeding {\n\t} \n\t\tFunction driving { \n\t} \n\t\tFunction halting {\n\t}\n}",
            explain: "By assigning different values to these data members, you can form several instances of the class Vehicle. For example, an airplane has three wheels, horsepower of 1,000, fuel as the type of tank, and a capacity of 100 liters. In the same way, a car has four wheels, horsepower of 200, gas as the type of tank, and a capacity of 25 liters.",
            practise: null,
            first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );

        //Topic 15 Questions
        $this->createQuestion(
            title: "What are the features of an object-oriented programming language?",
            a: "Data encapsulation",
            b: "Data abstraction",
            c: "All of the above",
            correct: "c",
            image: null,
            topicId: 15
        );

        $this->createQuestion(
            title: "What is a class in Ruby?",
            a: "A variable",
            b: "A function",
            c: "A blueprint from which individual objects are created",
            correct: "c",
            image: null,
            topicId: 15
        );


        $this->createQuestion(
            title: "What are data members of a class?",
            a: "Characteristics of the class",
            b: "Functions of the class",
            c: "Both characteristics and functions of the class",
            correct: "c",
            image: null,
            topicId: 15
        );

        $this->createQuestion(
            title: "What is an instance of a class?",
            a: "A loop",
            b: "A variable",
            c: "An object created from the blueprint of a class",
            correct: "c",
            image: null,
            topicId: 15
        );

        $this->createQuestion(
            title: "What is the purpose of assigning different values to the data members of a class?",
            a: "To create multiple classes",
            b: "To differentiate one object from the other",
            c: "To define different functions of the class",
            correct: "b",
            image: null,
            topicId: 15
        );

        /**************************Ruby Course 9 End *****************************/

        /**************************Ruby Course 10 Start *****************************/
        $this->createCourse(
            title: "Variables, Constants and Literals",
            desc: null
        );

        //Ruby Topics 16
        $this->createTopics(
            id: 10,
            title: "Variables, Constants and Literals",
            video: "https://firebasestorage.googleapis.com/v0/b/ehabari-76416.appspot.com/o/4.%20Ruby%20Programming%20-%2035%20-%20Ruby%20Global%20Variables(720P_HD).mp4?alt=media&token=efab6eec-ee92-433a-ad50-f8c22886d908&_gl=1*1n9lndc*_ga*MTI3NDUyMTA4NC4xNjg2NjUxNDY1*_ga_CW55HF8NVT*MTY4NjY3ODc5OC4zLjAuMTY4NjY3ODc5OC4wLjAuMA..",
            title2: "Variables, Constants and Literals",
            desc: "Variables are the memory locations, which hold any data to be used by any program. \n\nThere are five types of variables supported by Ruby. You already have gone through a small description of these variables in the previous chapter as well. These five types of variables are explained in this chapter.",
            desc2: "Here is an example showing the usage of global variable.",
            example: "#!/usr/bin/ruby\n\$global_variable = 10 \nclass Class1 \n\t\tdef print_global \n\t\tputs 'Global variable in Class1 is #\$global_variable'\n\t\tend\n\tend \n\nclass Class2 \n\t\tdef print_global \n\t\tputs 'Global variable in Class2 is #\$global_variable' \n\tend \nend \nclass1obj = Class1.new \nclass1obj.print_global \nclass2obj = Class2.new \nclass2obj.print_global",
            explain: "Here \$global_variable is a global variable. This will produce the following result \nNOTE - In Ruby, you CAN access value of any variable or constant by putting a hash \n(#) character just before that variable or constant. \n\n\t\tGlobal variable in Class1 is 10 \n\n\t\tGlobal variable in Class2 is 10",
            practise: null,
            first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );

        $this->createQuestion(
            title: "What prefix do global variables have in Ruby?",
            a: "#",
            b: "@",
            c: " $",
            correct: "c",
            image: null,
            topicId: 15
        );

        $this->createQuestion(
            title: "What is the default value of an uninitialized global variable in Ruby?",
            a: '""',
            b: "0",
            c: "nil",
            correct: "c",
            image: null,
            topicId: 15
        );

        $this->createQuestion(
            title: " Why is it not recommended to use global variables in Ruby?",
            a: 'They make programs run slower',
            b: " They can cause syntax errors in Ruby code",
            c: "They make programs harder to understand and maintain",
            correct: "c",
            image: null,
            topicId: 15
        );

        /**************************Ruby Course 10 End *****************************/

        /**************************Ruby Course 11 Start ***************************/
        $this->createCourse(
            title: "Local Variables",
            desc: null
        );

        //Ruby Topics 16
        $this->createTopics(
            id: 11,
            title: "Local Variables",
            video: null,
            title2: "Ruby Local Variables",
            desc: "Local variables begin with a lowercase letter or _. The scope of a local variable ranges from class, module, def, or do to the corresponding end or from a block's opening brace to its close brace {}. \n\n When an uninitialized local variable is referenced, it is interpreted as a call to a method that has no arguments. \n\n ",
            desc2: "Assignment to uninitialized local variables also serves as variable declaration. The variables start to exist until the end of the current scope is reached. The lifetime of local variables is determined when Ruby parses the program. \n\nIn the above example, local variables are id, name and addr.",
            example: null,
            explain: null,
            practise: null,
            first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );

        $this->createQuestion(
            title: "What is the scope of a local variable in Ruby?",
            a: "Descendants of the class or module in which the variable is defined",
            b: "Class",
            c: "Module, def or do to the corresponding end, or from a block's opening brace to its close brace {}",
            correct: "c",
            image: null,
            topicId: 16
        );

        /**************************Ruby Course 11 End *****************************/

        /**************************Ruby Course 12 Start ***************************/
        $this->createCourse(
            title: "Basic Literals",
            desc: "The rules Ruby uses for literals are simple and intuitive. This section explains all basic Ruby Literals"
        );

        //Ruby Topics 17
        $this->createTopics(
            id: 12,
            title: "Integer Numbers",
            video: "https://firebasestorage.googleapis.com/v0/b/ehabari-76416.appspot.com/o/5.%20Ruby%20Programming%20-%202%20-%20Arithmetic%20Operators%20Tutorial(720P_HD).mp4?alt=media&token=3847171c-6970-49c1-a56a-af9b9ef72a19&_gl=1*uhsjrq*_ga*MTI3NDUyMTA4NC4xNjg2NjUxNDY1*_ga_CW55HF8NVT*MTY4NjY3ODc5OC4zLjEuMTY4NjY3OTgzNS4wLjAuMA..",
            title2: "Integer Numbers",
            desc: "Ruby supports integer numbers. An integer number can range from -2 to 2 or -2 to 2 . Integers within this range are objects of class Fixnum and integers outside this range are stored in objects of class Bignum.",
            desc2: "You write integers using an optional leading sign, an optional base indicator (0 for octal, 0x for hex, or 0b for binary), followed by a string of digits in the appropriate base. Underscore characters are ignored in the digit string. \n\nYou can also get the integer value, corresponding to an ASCII character or escape the sequence by preceding it with a question mark.",
            example: "\n\t\t123 # Fixnum decimal \n\t\t1_234 # Fixnum decimal with underline \n\t\t-500 # Negative Fixnum \n\t\t0377 # octal \n\t\t0xff # hexadecimal \n\t\t0b1011 # binary \n\t\t?a # character code for 'a' \n\t\t?\n # code for a newline (0x0a) \n\t\t12345678901234567890 # Bignum",
            explain: "NOTE − Class and Objects are explained in a separate chapter of this tutorial.",
            practise: null
            , first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );


        //Ruby Topics 18
        $this->createTopics(
            id: 12,
            title: "Floating Numbers",
            video: null,
            title2: "Floating Numbers",
            desc: "Ruby supports floating numbers. They are also numbers but with decimals. Floating point numbers are objects of class Float and can be any of the following −",
            desc2: null,
            example: "\n\t\t123.4 # floating point value \n\t\t1.0e6 # scientific notation \n\t\t4E20 # dot not required \n\t\t4e+20 # sign before exponential",
            explain: null,
            practise: null, first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );


        //Ruby Topics 19
        $this->createTopics(
            id: 12,
            title: "String Literals",
            video: null,
            title2: "String Literals",
            desc: "Ruby strings are simply sequences of 8-bit bytes and they are objects of class String. Double-quoted strings allow substitution and backslash notation but single-quoted strings don't allow substitution and allow backslash notation only for \\ and \'",
            desc2: null,
            example: "#!/usr/bin/ruby -w \n\t\tputs 'escape using '\\'';\n\t\tputs 'That\'s right';",
            explain: "This will produce the following result- \nescape using '\' That's right \n\nYou can substitute the value of any Ruby expression into a string using the sequence #{expr }. Here, expr could be any ruby expression.",
            practise: "\n\t\t\t#!/usr/bin/ruby -w \n\t\t\tputs 'Multiplication Value : #{24*60*60}'; \n\n\t\t\tThis will produce the following result \n\t\t\tMultiplication Value : 86400", first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );

        /**************************Ruby Course 12 End *****************************/


        /**************************Ruby Course 13 Start ***************************/
        $this->createCourse(
            title: "Arrays",
            desc: null
        );

        //Ruby Topics 20
        $this->createTopics(
            id: 13,
            title: "Arrays",
            video: "https://firebasestorage.googleapis.com/v0/b/ehabari-76416.appspot.com/o/6.%20Ruby%20Programming%20-%206%20-%20How%20to%20Write%20Arrays%20in%20Ruby(720P_HD).mp4?alt=media&token=7057b4be-a856-43eb-8080-721c0bab9738&_gl=1*9bzl0v*_ga*MTI3NDUyMTA4NC4xNjg2NjUxNDY1*_ga_CW55HF8NVT*MTY4NjY3ODc5OC4zLjEuMTY4NjY4MDU3OS4wLjAuMA..",
            title2: "Arrays",
            desc: "Literals of Ruby Array are created by placing a comma-separated series of object references between the square brackets. A trailing comma is ignored.",
            desc2: null,
            example: "#!/usr/bin/ruby \nary = [ 'fred', 10, 3.14, 'This is a string', 'last element', ] \nary.each do |i| \n\t\tputs i \nend",
            explain: "This will produce the following result − \nfred \n10 \n3.14 \nThis is a string \nlast element",
            practise: null, first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );

        /**************************Ruby Course 13 End *****************************/

        /**************************Ruby Course 14 Start ***************************/
        $this->createCourse(
            title: "Hashes",
            desc: null
        );

        //Ruby Topics 21
        $this->createTopics(
            id: 14,
            title: "Hashes",
            video: null,
            title2: "Hashes",
            desc: "A literal Ruby Hash is created by placing a list of key/value pairs between braces, with either a comma or the sequence => between the key and the value. A trailing comma is ignored.",
            desc2: null,
            example: "\n\t\t#!/usr/bin/ruby \n\t\thsh = colors = { 'red' => 0xf00, 'green' => 0x0f0, 'blue' => 0x00f } \n\t\thsh.each do |key, value| \n\t\t\t\tprint key, ' is ', value, '\\n' \nend",
            explain: "This will produce the following result − \n\t\tred is 3840 \n\t\tgreen is 240 \n\t\tblue is 15",
            practise: null, first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );

        /**************************Ruby Course 14 End *****************************/

        /**************************Ruby Course 15 Start ***************************/
        $this->createCourse(
            title: "Conditional Statements",
            desc: null
        );

        //Ruby Topics 22
        $this->createTopics(
            id: 15,
            title: "if...else, case, unless",
            video: null,
            title2: "if...else, case, unless",
            desc: "Ruby offers conditional structures that are pretty common to modern languages. Here, we will explain all the conditional statements and modifiers available in Ruby.",
            desc2: "Ruby if...else Statement \n\nSyntax",
            example: "\n\t\tif conditional [then] \n\t\t\t\tcode... \n\t\t[elsif conditional [then] \n\t\t\t\tcode...]... \n\t\t[else \n\t\t\t\tcode...] \n\t\tend",
            explain: "if expressions are used for conditional execution. The values false and nil are false, and everything else are true. Notice Ruby uses elsif, not else if nor elif. \n\nExecutes code if the conditional is true. If the conditional is not true, code specified in the else clause is executed. \n\nAn if expression's conditional is separated from code by the reserved word then, a newline, or a semicolon.",
            practise: "\n\t#!/usr/bin/ruby \n\tx = 1 \n\tif x > 2 \n\t\t\tputs 'x is greater than 2' \n\telsif x <= 2 and x!=0 \n\t\t\tputs 'x is 1' \n\telse \n\t\tputs 'I can't guess the number' \n\t end \n\n\n\t The result is x is 1"
            , first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,);


        $this->createQuestion(
            title: "What is the syntax for an if...else statement in Ruby?",
            a: "if condition [then] code... [elsif conditional [then] code...]... [else code...] end",
            b: "if condition code... else code... end",
            c: "if condition [then] code... [elsif conditional [then] code...]... [else code...]",
            correct: "a",
            image: null,
            topicId: 22
        );


        $this->createQuestion(
            title: "What is the purpose of the elsif keyword in Ruby if...else statements?",
            a: "It specifies an additional code block to be executed if the previous code block is false",
            b: "It specifies the code to be executed if the if statement is false.",
            c: "It specifies an additional condition to be checked if the previous condition is false.",
            correct: "c",
            image: null,
            topicId: 22
        );

        //Ruby Topics 23
        $this->createTopics(
            id: 15,
            title: "if modifier",
            video: null,
            title2: "if modifier",
            desc: "Syntax \n\n\t\t\tcode if condition \n\nExecutes code if the conditional is true.",
            desc2: "Example",
            example: "\t\t#!/usr/bin/ruby \n\t\t\$debug = 1 \n\t\tprint 'debug\\n' if \$debug",
            explain: "This will produce the following result − \n\n\t\t\t\tdebug",
            practise: null, first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );


        $this->createQuestion(
            title: "In Ruby, which values are considered false in if statements?",
            a: "0 and nil",
            b: "false and nil",
            c: "false and true",
            correct: "b",
            image: null,
            topicId: 23
        );

        $this->createQuestion(
            title: "What is the purpose of the if modifier in Ruby?",
            a: "It specifies an if statement without the need for an else clause.",
            b: "It executes code if the conditional is true without the need for an if statement.",
            c: "It specifies an if statement that only executes code if the conditional is true.",
            correct: "c",
            image: null,
            topicId: 23
        );

        //Ruby Topics 24
        $this->createTopics(
            id: 15,
            title: "unless Statement",
            video: null,
            title2: "Ruby unless Statement",
            desc: "Syntax \n\n\n\tunless conditional [then] \n\t\tcode \n\t\t\t[else \n\t\t\t\tcode ] \n\tend",
            desc2: "Executes code if conditional is false. If the conditional is true, code specified in the else clause is executed. \n\n\nExample",
            example: "\t#!/usr/bin/ruby \n\tx = 1 \n\tunless x>=2 \n\t\t\tputs 'x is less than 2' \n\telse puts 'x is greater than 2' \n\tend",
            explain: "This will produce the following result − \n\n\t\t\tx is less than 2",
            practise: null, first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );

        $this->createQuestion(
            title: "What is the purpose of the Ruby unless statement?",
            a: " Executes code if conditional is true",
            b: "Executes code if conditional is false",
            c: "Executes code without any conditional check",
            correct: "b",
            image: null,
            topicId: 24
        );

        $this->createQuestion(
            title: "What is the syntax for the Ruby unless statement?",
            a: "unless conditional [then] code [else code] end",
            b: "if conditional [then] code [else code] end",
            c: "for variable in range [do] code end",
            correct: "a",
            image: null,
            topicId: 24
        );

        //Ruby Topics 25
        $this->createTopics(
            id: 15,
            title: "unless modifier",
            video: null,
            title2: "Ruby unless modifier",
            desc: "Syntax \n\t\t\tcode unless conditional \nExecutes code if conditional is false.",
            desc2: null,
            example: "\n\t\t\t#!/usr/bin/ruby \n\t\t\t\$var = 1 \n\t\t\tprint '1 -- Value is set\n' if \$var \n\t\t\tprint '2 -- Value is set\n' unless \$var \n\t\t\t\$var = false \n\t\t\tprint '3 -- Value is set\n' unless \$var",
            explain: "This will produce the following result − \n\n\t\t\t1 -- Value is set \n\t\t\t3 -- Value is set",
            practise: null, first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );

        $this->createQuestion(
            title: "What is the purpose of the Ruby unless modifier?",
            a: "Executes code if conditional is true",
            b: "Executes code if conditional is false",
            c: "Executes code without any conditional check",
            correct: "b",
            image: null,
            topicId: 25
        );

        $this->createQuestion(
            title: "What is the syntax for the Ruby unless modifier?",
            a: "Code if conditional",
            b: "if conditional [then] code [else code] end",
            c: "code unless conditional",
            correct: "c",
            image: null,
            topicId: 25
        );


        //Ruby Topics 26
        $this->createTopics(
            id: 15,
            title: "Case Statement",
            video: null,
            title2: "Ruby case Statement",
            desc: "Syntax \n\t\t[when expression [, expression ...] [then] \n\t\t\t\t\tcode ]... \n\t\t[else  \n\t\t\t\t\tcode ] \n\t\tend \n\n\n Compares the expression specified by case and that specified by when using the === operator and executes the code of the when clause that matches. \n\n The expression specified by the when clause is evaluated as the left operand. If no when clauses match, case executes the code of the else clause.  \n\nA when statement's expression is separated from code by the reserved word then, a newline, or a semicolon. Thus − \n\n\n\n \t\tcase expr0 \n\t\twhen expr1, expr2 \n\t\t\t\tstmt1 \n\t\twhen expr3, expr4 \n\t\t\tstmt2 \n\t\telse \n\t\t\tstmt3 \n\t\tend",
            desc2: "Compares the expression specified by case and that specified by when using the === operator and executes the code of the when clause that matches. \n\nThe expression specified by the when clause is evaluated as the left operand. If no when clauses match, case executes the code of the else clause.\n\nA when statement's expression is separated from code by the reserved word then, a newline, or a semicolon. Thus − \n\t\tcase expr0 \n\t\twhen expr1, expr2 \n\t\t\t\tstmt1 \n\t\twhen expr3, expr4 \n\t\t\t\tstmt2 \n\t\telse \n\t\t\t\tstmt3 \n\t\tend",
            example: "#!/usr/bin/ruby \n\$age = 5 \n\tcase \$age \n\t\twhen 0 .. 2 \n\t\t\t\tputs 'baby' \n\t\twhen 3 .. 6 \n\t\t\t\tputs 'little child' \n\t\twhen 7 .. 12 \n\t\t\t\tputs 'child' \n\t\twhen 13 .. 18 \n\t\t\t\tputs 'youth' \n\t\telse \n\t\t\t\tputs 'adult' \n\t\tend",
            explain: "\n\n\nThis will produce the following result − \n\n\t\t\t\tlittle child",
            practise: null, first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );

        $this->createQuestion(
            title: "What is the purpose of the Ruby case statement?",
            a: "To execute code if a conditional is true",
            b: "To execute code if a conditional is false",
            c: "To compare the expression specified by case and execute code of the when clause that matches",
            correct: "c",
            image: null,
            topicId: 26
        );

        $this->createQuestion(
            title: "How is the expression specified by the when clause evaluated?",
            a: "As the right operand",
            b: "As the left operand",
            c: "As the first operand",
            correct: "b",
            image: null,
            topicId: 26
        );

        $this->createQuestion(
            title: "What is executed if no when clauses match in a case statement??",
            a: "The code of the else clause",
            b: "The code of the first when clause",
            c: "The code of the last when clause",
            correct: "a",
            image: null,
            topicId: 26
        );

        $this->createQuestion(
            title: "What is the operator used to compare the expression specified by case and when?",
            a: "==",
            b: "!=",
            c: "===",
            correct: "c",
            image: null,
            topicId: 26
        );

        $this->createQuestion(
            title: "What is the purpose of the else clause in a case statement?",
            a: "To execute code if the conditional is true",
            b: "To execute code if the conditional is false",
            c: "To execute code if no when clauses match",
            correct: "c",
            image: null,
            topicId: 26
        );

        /**************************Ruby Course 15 End *****************************/

        /**************************Ruby Course 16 Start *****************************/
        $this->createCourse(
            title: "Loops Statements",
            desc: "Loops in Ruby are used to execute the same block of code a specified number of times. This chapter details all the loop statements supported by Ruby."
        );

        //Ruby Topics 27
        $this->createTopics(
            id: 16,
            title: "Ruby while Statement",
            video: null,
            title2: "Ruby while Statement",
            desc: "Syntax \n\n\n \n\t\t\t\while conditional [do] \n\t\t\t\t\tcode \n\t\t\tend",
            desc2: "Executes code while conditional is true. A while loop's conditional is separated from code by the reserved word do, a newline, backslash \, or a semicolon ;.",
            example: "#!/usr/bin/ruby \n\$i = 0 \n\$num = 5 \nwhile \$i < \$num do \n\t\t\tputs('Inside the loop i = \#\$i' ) \n\t\t\t\$i +=1 \nend",
            explain: "This will produce the following result − \n\n\n\t\tInside the loop i = 0 \n\t\tInside the loop i = 1 \n\t\tInside the loop i = 2 \n\t\tInside the loop i = 3 \n\t\tInside the loop i = 4",
            practise: null, first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );


        $this->createQuestion(
            title: "What does the Ruby while loop do?",
            a: "Executes the code while the condition is true",
            b: "Executes the code while the condition is false",
            c: "Executes the code while the condition is false",
            correct: "a",
            image: null,
            topicId: 27
        );

        $this->createQuestion(
            title: "How is the condition separated from the code in a Ruby while loop?",
            a: "By a comma",
            b: "By a dot",
            c: "By the reserved word 'do', a newline, backslash , or a semicolon ;",
            correct: "c",
            image: null,
            topicId: 27
        );

        //Ruby Topics 28
        $this->createTopics(
            id: 16,
            title: "Ruby while Modifier",
            video: null,
            title2: "Ruby while Modifier",
            desc: "Syntax \n\n\n\t\tcode while condition \n\t\tOR \n\t\tbegin \n\t\t\t\tcode \n\t\tend while conditional \n\n\nExecutes code while conditional is true.",
            desc2: "If a while modifier follows a begin statement with no rescue or ensure clauses, code is executed once before conditional is evaluated.",
            example: "\n\t#!/usr/bin/ruby \n\t\$i = 0 \n\t\$num = 5 \n\tbegin \n\t\t\tputs('Inside the loop i = \#\$i') \n\t\t\t\$i +=1 \n\tend while \$i < \$num",
            explain: "This will produce the following result − \n\n\t\tInside the loop i = 0 \n\t\tInside the loop i = 1 \n\t\tInside the loop i = 2 \n\t\tInside the loop i = 3 \n\t\tInside the loop i = 4",
            practise: null, first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );

        $this->createQuestion(
            title: "What is the purpose of the Ruby while modifier?",
            a: "To execute the code once before evaluating the condition",
            b: "To execute the code while the condition is false",
            c: "To execute the code while the condition is true",
            correct: "c",
            image: null,
            topicId: 28
        );

        $this->createQuestion(
            title: "How is the Ruby while modifier syntax different from the regular while loop syntax?",
            a: " The while modifier does not have a reserved word 'do'",
            b: "The while modifier requires a comma to separate the condition from the code",
            c: " The while modifier requires a semicolon to separate the condition from the code",
            correct: "a",
            image: null,
            topicId: 28
        );

        $this->createQuestion(
            title: "What happens if a while modifier follows a begin statement with no rescue or ensure clauses?",
            a: "The code is executed once before evaluating the condition",
            b: "The code is not executed at all",
            c: "An error occurs",
            correct: "a",
            image: null,
            topicId: 28
        );


        //Ruby Topics 29
        $this->createTopics(
            id: 16,
            title: "Ruby until Statement",
            video: null,
            title2: "Ruby until Statement",
            desc: "\n\tuntil conditional [do] \n\t\t\tcode \n\tend",
            desc2: "Executes code while conditional is false. An until statement's conditional is separated from code by the reserved word do, a newline, or a semicolon.",
            example: "\n\t\t\#!/usr/bin/ruby \n\t\t\$i = 0 \n\t\t\$num = 5 \n\t\tuntil \$i > \$num do \n\t\t\t\tputs('Inside the loop i = \#\$i') \n\t\t\\t\t\$i +=1; \n\t\tend",
            explain: "This will produce the following result − \n\n\t\t\t\tInside the loop i = 0 \n\t\t\t\tInside the loop i = 1 \n\t\t\t\tInside the loop i = 2 \n\t\t\t\tInside the loop i = 3 \n\t\t\t\tInside the loop i = 4 \n\t\t\t\tInside the loop i = 5",
            practise: null, first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );


        $this->createQuestion(
            title: "What is the purpose of the Ruby until statement?",
            a: "Executes code while conditional is true.",
            b: "Executes code while conditional is false.",
            c: "Loops over a collection of elements.",
            correct: "b",
            image: null,
            topicId: 29
        );


        $this->createQuestion(
            title: "How is the conditional of a Ruby until statement separated from the code?",
            a: "By a do keyword only.",
            b: "By a newline only.",
            c: "By a do keyword, a newline, or a semicolon.",
            correct: "c",
            image: null,
            topicId: 29
        );


        $this->createQuestion(
            title: "What will be the result of executing the following Ruby code?",
            a: "Prints 'Inside the loop i = 0' only.",
            b: "Prints 'Inside the loop i = 0' to 'Inside the loop i = 5'.",
            c: "Results in an error.",
            correct: "b",
            image: "\n\t\t\$i = 0 \n\t\t\$num = 5 \n\t\tuntil \$i > \$num do \n\t\t\t\tputs('Inside the loop i = #\$i') \n\t\t\t\t\$i +=1; \n\t\tend",
            topicId: 29
        );


        //Ruby Topics 30
        $this->createTopics(
            id: 16,
            title: "Ruby until modifier",
            video: null,
            title2: "Ruby until modifier",
            desc: "Syntax \n\n\t\tcode until conditional \n\t\tOR \n\t\tbegin \n\t\t\t\tcode \n\t\tend until conditional",
            desc2: "Executes code while conditional is false. If an until modifier follows a begin statement with no rescue or ensure clauses, code is executed once before conditional is evaluated.",
            example: " \t\t#!/usr/bin/ruby \n\t\t\$i = 0 \n\t\t\$num = 5 \n\t\tbegin \n\t\t\t\tputs('Inside the loop i = \#\$i') \n\t\t\t\t\$i +=1; \n\t\tend until \$i > \$num ",
            explain: "This will produce the following result − \n\n\t\t\tInside the loop i = 0 \n\t\t\tInside the loop i = 1 \n\t\t\tInside the loop i = 2 \n\t\t\tInside the loop i = 3 \n\t\t\tInside the loop i = 4 \n\t\t\tInside the loop i = 5             ",
            practise: null, first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );

        $this->createQuestion(
            title: "What is the purpose of the Ruby until modifier?",
            a: "Executes code while conditional is true.",
            b: "Executes code while conditional is false.",
            c: "Loops over a collection of elements.",
            correct: "b",
            image: "\n\t\t\$i = 0 \n\t\t\$num = 5 \n\t\tuntil \$i > \$num do \n\t\t\t\tputs('Inside the loop i = #\$i') \n\t\t\t\t\$i +=1; \n\t\tend",
            topicId: 30
        );

        $this->createQuestion(
            title: "What is the difference between a while statement and a while modifier in Ruby?",
            a: "There is no difference.",
            b: " The syntax of the while statement has the do keyword while the while modifier does not.",
            c: "The while statement executes code while the conditional is true while the while modifier executes code while the conditional is false.",
            correct: "c",
            image: "\n\t\t\$i = 0 \n\t\t\$num = 5 \n\t\tuntil \$i > \$num do \n\t\t\t\tputs('Inside the loop i = #\$i') \n\t\t\t\t\$i +=1; \n\t\tend",
            topicId: 30
        );


        //Ruby Topics 31
        $this->createTopics(
            id: 16,
            title: "Ruby for Statement",
            video: null,
            title2: "Ruby for Statement",
            desc: "Syntax \n\n\t\t\tfor variable [, variable ...] in expression [do] \n\n\t\t\t\t\tcode \n\n\t\t\tend",
            desc2: "Executes code once for each element in expression.",
            example: "#!/usr/bin/ruby \n\t\tfor i in 0..5 \n\t\t\t\tputs 'Value of local variable is \#{i}' \nend ",
            explain: "Here, we have defined the range 0..5. The statement for i in 0..5 will allow i to take values in the range from 0 to 5 (including 5). \n\n\This will produce the following result − \n\n\n\t\t\tValue of local variable is 0 \n\t\t\tValue of local variable is 1 \n\t\t\tValue of local variable is 2 \n\t\t\tValue of local variable is 3 \n\t\t\tValue of local variable is 4 \n\t\t\tValue of local variable is 5             ",
            practise: null, first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );

        $this->createQuestion(
            title: "What is the syntax for the Ruby for statement?",
            a: "for variable [, variable ...] in expression [do]",
            b: "for (variable; condition; expression) {code block}",
            c: " for each variable in expression do {code block}",
            correct: "a",
            image: null,
            topicId: 31
        );

        $this->createQuestion(
            title: "What is the purpose of a for statement in Ruby?",
            a: "It creates a new scope for local variables.",
            b: "It executes code once for each element in the expression.",
            c: "It executes code while a conditional is true.",
            correct: "b",
            image: null,
            topicId: 31
        );


        //Ruby Topics 32
        $this->createTopics(
            id: 16,
            title: "Ruby for...in Statement",
            video: null,
            title2: "Ruby for...in Statement",
            desc: "A for...in loop is almost exactly equivalent to the following − \n\n\t\t\t(expression).each do |variable[, variable...]| code end",
            desc2: "except that a for loop doesn't create a new scope for local variables. A for loop's expression is separated from code by the reserved word do, a newline, or a semicolon.",
            example: "\n\t\t#!/usr/bin/ruby \n\t\t(0..5).each do |i| \n\t\t\t\tputs 'Value of local variable is #{i}' \n\t\tend",
            explain: "This will produce the following result − \n\n\t\t\tValue of local variable is 0 \n\t\t\tValue of local variable is 1 \n\t\t\tValue of local variable is 2 \n\t\t\tValue of local variable is 3 \n\t\t\tValue of local variable is 4 \n\t\t\tValue of local variable is 5",
            practise: null, first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );

        $this->createQuestion(
            title: "What is the equivalent of a for statement using the .each method in Ruby?",
            a: "(expression).loop do |variable[, variable...]| code end",
            b: "(expression).for do |variable[, variable...]| code end",
            c: "(expression).each do |variable[, variable...]| code end",
            correct: "c",
            image: null,
            topicId: 31
        );


        //Ruby Topics 32
        $this->createTopics(
            id: 16,
            title: "Ruby break Statement",
            video: null,
            title2: "Ruby break Statement",
            desc: "Syntax \n\n\n\t\t\tbreak",
            desc2: "Terminates the most internal loop. Terminates a method with an associated block if called within the block (with the method returning nil).",
            example: "\t\t#!/usr/bin/ruby \n\t\tfor i in 0..5 \n\t\tif i > 2 then \n\t\t\tbreak \n\t\tend \n\t\tputs 'Value of local variable is \#{i}' \n\t\tend",
            explain: "This will produce the following result − \n\n\t\t\tValue of local variable is 0 \n\t\t\tValue of local variable is 1 \n\t\t\tValue of local variable is 2",
            practise: null, first: null,
            second: null,
            third: null,
            fourth: null,
            fifth: null,
            sixth: null,
            seventh: null,
            eighth: null,
            ninth: null,
            tenth: null,
            order: null,
        );

        $this->createQuestion(
            title: "What is the purpose of the Ruby ‘break’ statement?",
            a: "To execute a block of code while a conditional is true",
            b: "To execute code once for each element in an expression",
            c: "To terminate the most internal loop and exit the loop",
            correct: "c",
            image: null,
            topicId: 32
        );


        /**************************Ruby Course 16 End *****************************/
    }

    private function createCourse($title, $desc): void
    {
        Course::create([
            'title' => $title,
            'slug' => Str::slug($title),
            "desc" => $desc,
            "sub_desc" => null,
            'language_id' => 2,
        ]);
    }

    private function createTopics($id, $title, $video, $title2, $desc, $desc2, $example, $explain, $practise, $first, $second, $third, $fourth, $fifth, $sixth, $seventh, $eighth, $ninth, $tenth, $order): void
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
            "code_first_line" => $first,
            "code_second_line" => $second,
            "code_third_line" => $third,
            "code_fourth_line" => $fourth,
            "code_fifth_line" => $fifth,
            "code_six_line" => $sixth,
            "code_seven_line" => $seventh,
            "code_eight_line" => $eighth,
            "code_nine_line" => $ninth,
            "code_ten_line" => $tenth,
            "code_order" => $order,
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
}
