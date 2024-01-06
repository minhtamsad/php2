

<?= $page_content; ?>
<select>
    <?php foreach ($list_of_courses as $course_name): ?>
        <option><?= $course_name ?></option>
    <?php endforeach; ?>
</select>
