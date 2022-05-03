<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majesty Developer</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="question">
        <div class="question__value">Вы точно хотите это сделать?</div>
        <div class="question__buttons">
            <div class="question__left"> Да</div>
            <div class="question__right"> Нет</div>
        </div>
    </div>
    <div class="background-question">
    </div>
    <header>
        <div class="title-block">
            <h1 class="title">Majesty Developer</h1>
        </div>
        <div class="time"></div>
    </header>

    <nav>
        <ul class="content__links">

        </ul>
    </nav>

    <form class="text-white test", action = "/test/check", method = "POST">

        <fieldset class="mb-3">
            <label class="form-label" for="">Name Second Name</label>
            <input class="form-control" name="fullName" type="text" placeholder="Enter your FIO" required>
        </fieldset>

        <fieldset class="mb-3">
            <label for="" class="form-label">Group</label>
            <select class="form-select" name="group" id="" required>
                <option value="none" disabled selected>Choose your group</option>
                <optgroup label="First course">
                    <option value="10">First group</option>
                    <option value="11">Second group</option>
                    <option value="12">Third group</option>
                </optgroup>
                <optgroup label="Second course">
                    <option value="20">First group</option>
                    <option value="21">Second group</option>
                    <option value="22">Third group</option>
                </optgroup>
            </select>
        </fieldset>

        <h4 class="my-4">Questions</h4>
        <fieldset class="mb-5  rounded-3 p-5">
            <label for="" class="form-label">Question №1</label>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae atque culpa unde, velit aut quidem
                distinctio fugit repellat aspernatur porro modi quibusdam incidunt nobis perspiciatis. Pariatur,
                eveniet! Incidunt, consequuntur eum?</p>
            <input name="task1" type="text" class="form-control" id="Test_input" placeholder="Ответ на вопрос №1"
                required>
        </fieldset>

        <fieldset class="mb-5  rounded-3 p-5">
            <label for="" class="form-label">Question №2</label>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae atque culpa unde, velit aut quidem
                distinctio fugit repellat aspernatur porro modi quibusdam incidunt nobis perspiciatis. Pariatur,
                eveniet! Incidunt, consequuntur eum?</p>
            <div class="d-flex flex-column gap-2">
                <div>
                    <input type="radio" name="task2" class="form-check-input">
                    <label for="" class="form-check-inline">Answer 1</label>
                </div>
                <div>
                    <input type="radio" name="task2" class="form-check-input">
                    <label for="" class="form-check-inline">Answer 2</label>
                </div>
                <div>
                    <input type="radio" name="task2" class="form-check-input">
                    <label for="" class="form-check-inline">Answer 3</label>
                </div>
                <div>
                    <input type="radio" name="task2" class="form-check-input">
                    <label for="" class="form-check-inline">Answer 4</label>
                </div>
            </div>
        </fieldset>

        <fieldset class="mb-5 rounded-3 p-5">
            <label for="" class="form-label">Question №3</label>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae atque culpa unde, velit aut quidem
                distinctio fugit repellat aspernatur porro modi quibusdam incidunt nobis perspiciatis. Pariatur,
                eveniet! Incidunt, consequuntur eum?</p>
            <select name="task3" id="" class="form-select" required>
                <option value="" disabled selected>Choose your answer</option>
                <optgroup label="Group 1">
                    <option value="12">Answer 1</option>
                    <option value="12">Answer 2</option>
                </optgroup>
                <optgroup label="Group 2">
                    <option value="12">Answer 3</option>
                    <option value="12">Answer 4</option>
                </optgroup>
            </select>
        </fieldset>

        <fieldset class="d-flex justify-content-end flex-wrap gap-3 mb-5">
            <button id="send_type" class="btn btn-primary">Send</button>
            <button class="btn btn-outline-danger">Clear</button>
        </fieldset>

        <div class='result-block'>
        <?php 
            if (isset($data['errors'])) {
                foreach ($data['errors'] as $key => $item) {
                    echo "<p class='result-block__item error'>$item</p>";
                }
            } elseif (isset($data['result'])) {
                $result = $data['result'];
                $color = $data['result'] > 2 ? 'success' : 'error';
                echo "<p style='color: transparent;' class='result-block__item $color'>Вы ответили верно на $result из 3 вопросов!</p>";
                if($data['result'] > 0){
                    echo "<img src='https://i.ibb.co/FbtbQ5v/image-2021-02-21-T08-41-23-990-Z.png' alt='Картинка приемлемо' style='width: 500px;'>";
                }
                else{
                    echo "<img src='https://i.ibb.co/K6FqQCg/imgonline-com-ua-Resize-Zf-NL1-T4-UHYs-Vs-auto-custom.jpg' alt='Картинка приемлемо' style='width: 500px;'>";
                }
            }
            elseif (isset($data['exception'])){
                echo "Ты ОБЯЗАН авторизоваться, чтобы увидеть свой результат.";
            }
        ?>
    </div>

    </form>
    </main>
</body>
<script src="/public/scripts/jquery-3.6.0.min.js"></script>
<script src="/public/scripts/script.js"></script>

</html>