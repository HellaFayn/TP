<!DOCTYPE html>
<html>
    <head>
        <title>Task Performance</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
    <?php
        $FirstName = "Juan";
        $LastName = "Dela Cruz";

        $programmingSubjects = [
            [
                "title" => "Web Programming",
                "topics" => ["HTML, CSS, and JavaScript", "PHP", "ASP.NET"],
                "logo" => "html.png"
            ],
            [
                "title" => "Mobile Programming",
                "topics" => ["Android", "iOS", "Windows"],
                "logo" => "android.png"
            ],
            [
                "title" => "Desktop Programming",
                "topics" => ["Java", "C#.Net", "Visual Basic"],
                "logo" => "java.png"
            ]
        ];
    ?>

    <div class="row header-content">
        <div class="column-12">
            <?php echo "$FirstName $LastName"; ?>
        </div>
    </div>

        <div class="row">
            <div class="column-3 border-profile">
                <div class="row">
                    <div class="column-12">
                        <img src="login_logo.png"/>
                    </div>
                </div>
                <div class="row">
                    <div class="column-12">
                        <p>Name: <?php echo "$FirstName $LastName"; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 menu">
                        <ul>
                            <li>Home</li>
                            <li>Subjects</li>
                            <li>Assignment</li>
                            <li>Quiz</li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="column-9">
                <div class="row">
                    <?php foreach ($programmingSubjects as $subject) : ?>
                        <div class="column-4 menu">
                            <div class="border-subjects">
                                <div class="row">
                                    <div class="column-12">
                                        <img src="<?php echo $subject['logo']; ?>"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="column-12">
                                        <ul>
                                            <li class="subject">
                                                <?php echo $subject['title']; ?>
                                            </li>
                                            <?php foreach ($subject['topics'] as $topic) : ?>
                                                <li><?php echo $topic; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </body>
</html>
