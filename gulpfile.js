"use strict";

var gulp = require("gulp"),
  sass = require("gulp-sass")(require("sass")),
  livereload = require("gulp-livereload"),
  sourcemaps = require("gulp-sourcemaps"), // модуль для генерации карты исходных файлов
  autoprefixer = require("gulp-autoprefixer"),
  cleanCSS = require("gulp-clean-css"), // плагин для минимизации CSS
  plumber = require("gulp-plumber"), // модуль для отслеживания ошибок
  rename = require("gulp-rename");

gulp.task("styles", function () {
  return (
    gulp
      .src("sass/main.scss")
      .pipe(plumber()) // для отслеживания ошибок
      .pipe(sourcemaps.init()) // инициализируем sourcemap
      .pipe(sass())
      .pipe(autoprefixer()) // добавим префиксы
      .pipe(gulp.dest("./build/css"))
      // .pipe(rename({ suffix: ".min" }))
      // .pipe(cleanCSS()) // минимизируем CSS
      // .pipe(sourcemaps.write()) // записываем sourcemap
      .pipe(livereload())
  );
});

gulp.task("watch:styles", function () {
  livereload.listen();
  gulp.watch("**/*.scss", gulp.series("styles"));
});
