var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('default', watch);

gulp.task('sass', compilaSass);

function compilaSass() {
    return gulp.src(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss'])
        .pipe(sass()) //Converter o sass em css
        .pipe(gulp.dest('src/css'));
}

function watch() {
    gulp.watch(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss'], compilaSass);
}
