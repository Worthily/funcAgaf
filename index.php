<?php
  include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <h2 class="funcTitle">Функция : <span class="">strlen($str)</span></h2>
      <div class="input">
        Ввод:
        <?= $input = 'input'; ?>
      </div>
      <div class="output">
        Результат:
        <?= $input = Fstrlen($input); ?>
      </div>
    </div>

    <div class="container">
      <h2 class="funcTitle">Функция : <span class="">chr($ascii)</span></h2>
      <div class="input">
        Ввод:
        <?= $input = '65'; ?>
      </div>
      <div class="output">
        Результат:
        <?= $input =  Fchr($input); ?>
      </div>
    </div>

    <div class="container">
      <h2 class="funcTitle">Функция : <span class="">ord($str)</span></h2>
      <div class="input">
        Ввод:
        <?= $input = 'A'; ?>
      </div>
      <div class="output">
        Результат:
        <?= $input = Ford($input); ?>
      </div>
    </div>

    <div class="container">
      <h2 class="funcTitle">
        Функция : <span class="">count_chars($str [, $mode])</span>
      </h2>
      <div class="input">
        Ввод:
        <?= $input = '65'; ?>
      </div>
      <div class="output">
        Результат:
        <?= $input = Fcount_chars($input); ?>
      </div>
    </div>

    <div class="container">
      <h2 class="funcTitle">
        Функция : <span class="">str_shuffle($str)</span>
      </h2>
      <div class="input">
        Ввод:
        <?= $input = 'input'; ?>
      </div>
      <div class="output">
        Результат:
        <?= $input = Fstr_shuffle($input); ?>
      </div>
    </div>

    <div class="container">
      <h2 class="funcTitle">Функция : <span class="">strrev($str)</span></h2>
      <div class="input">
        Ввод:
        <?= $input = 'input'; ?>
      </div>
      <div class="output">
        Результат:
        <?= $input = Fstrrev($input); ?>
      </div>
    </div>

    <div class="container">
      <h2 class="funcTitle">
        Функция : <span class="">ctype_alnum($str)</span>
      </h2>
      <div class="input">
        Ввод:
        <?= $input = 'input'; ?>
      </div>
      <div class="output">
        Результат:
        <?= $input = Fctype_alnum($input); ?>
      </div>
    </div>

    <!-- new -->
    <ol>
      <li>
        Функция : <span class="">ctype_alpha($str)</span>
        <ul>
          <li>
            <div class="input">
              Ввод:
              <?= $input = 'input'; ?>
            </div>
          </li>
          <li>
            <div class="output">
              Результат:
              <?= $input = Fctype_alpha($input); ?>
            </div>
          </li>
        </ul>
      </li>
      <li>
        Функция : <span class="">ctype_xdigit($str)</span>
        <ul>
          <li>
            <div class="input">
              Ввод:
              <?= $input = 'input'; ?>
            </div>
          </li>
          <li>
            <div class="output">
              Результат:
              <?= $input = Fctype_xdigit($input); ?>
            </div>
          </li>
        </ul>
      </li>
      <li>
        Функция : <span class="">ctype_cntrl($str)</span>
        <ul>
          <li>
            <div class="input">
              Ввод:
              <?= $input = 'input'; ?>
            </div>
          </li>
          <li>
            <div class="output">
              Результат:
              <?= $input = Fctype_cntrl($input); ?>
            </div>
          </li>
        </ul>
      </li>
      <li>
        Функция : <span class="">ctype_digit($str)</span>
        <ul>
          <li>
            <div class="input">
              Ввод:
              <?= $input = 'input'; ?>
            </div>
          </li>
          <li>
            <div class="output">
              Результат:
              <?= $input = Fctype_digit($input); ?>
            </div>
          </li>
        </ul>
      </li>
      <li>
        Функция : <span class="">ctype_print($str)</span>
        <ul>
          <li>
            <div class="input">
              Ввод:
              <?= $input = 'input'; ?>
            </div>
          </li>
          <li>
            <div class="output">
              Результат:
              <?= $input = Fctype_print($input); ?>
            </div>
          </li>
        </ul>
      </li>
      <li>
        Функция : <span class="">ctype_graph($str)</span>
        <ul>
          <li>
            <div class="input">
              Ввод:
              <?= $input = 'input'; ?>
            </div>
          </li>
          <li>
            <div class="output">
              Результат:
              <?= $input = Fctype_graph($input); ?>
            </div>
          </li>
        </ul>
      </li>
    </ol>
  </body>
</html>
