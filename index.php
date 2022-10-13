<html>
<head>
    <title><?php echo "Question tool"; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="bg-light">
<?php
include_once("app.php");
?>
<div class="container text-center">
    <div class="row">
        <div class="col pt-5">
         <img src="img/questions.jpg" width="300" height="300">
        </div>
        <div class="col">
            <h1 class="pt-5 pb-5">Questions Tool</h1>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="mb-3">
                    <label for="question" class="form-label">Question</label>
                    <input type="text" id="question" name="question" size="20" maxlength="40"
                           value="<?php echo $question; ?>"
                           placeholder="<?php echo $textPromt; ?>">
                </div>
                <div class="mb-3">
                    <label for="answer" class="form-label">Answer 1</label>
                    <input type="text" id="answer1" name="answer1" size="20" maxlength="40"
                           value="<?php echo $answer1; ?>"
                           placeholder="<?php echo $textPromt; ?>">
                </div>
                <div class="mb-3">
                    <label for="answer" class="form-label">Answer 2</label>
                    <input type="text" id="answer2" name="answer2" size="20" maxlength="40"
                           value="<?php echo $answer2; ?>"
                           placeholder="<?php echo $textPromt; ?>">
                </div>
                <div class="mb-3">
                    <label for="answer" class="form-label">Answer 3</label>
                    <input type="text" id="answer3" name="answer3" size="20" maxlength="40"
                           value="<?php echo $answer3; ?>"
                           placeholder="<?php echo $textPromt; ?>">
                </div>
                <div class="mb-3">
                    <label for="answer" class="form-label">Correct</label>
                    <input type="number" id="correct" name="correct" size="3" maxlength="40"
                           value="<?php echo $correct; ?>"
                           placeholder="<?php echo $textPromt; ?>">
                    <input type="submit" id="submit" name="submit" value="Save">
                </div>
                <p>&nbsp;</p>
                <p>Questions.txt</p>
                <a class="btn btn-primary" href="questions.txt" download="questions.txt">Download</a>
            </form>
            <?php echo $message; ?>
        </div>
        <div class="col">
            <p>&nbsp;</p>
            <div id="list">
                <p><iframe src="questions.txt" frameborder="0" height="400"
                           width="95%"></iframe></p>
            </div>
        </div>
    </div>
</div>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html