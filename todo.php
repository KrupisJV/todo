
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="todo.css">
    </head>
<body>
    <div class="main">
        <div class="box">
    <div id="todo-list">
        <h1>Todo List</h1>
        <input type="text" id="new-task" placeholder="Pievieno uzdevumu">
        <button onclick="addTask()">Pievieno</button>
        <ul id="tasks">
        </ul>
    </div>
</div>
</div>

<script>
        function addTask() {
            const taskText = document.getElementById("new-task").value;
            if (taskText.trim() === "") {
                alert("Task cannot be empty");
                return;
            }

            const tasksList = document.getElementById("tasks");
            const listItem = document.createElement("li");
            listItem.innerHTML = `
                <span>${taskText}</span>
                <button onclick="removeTask(this)">Remove</button>
            `;
            tasksList.appendChild(listItem);

            document.getElementById("new-task").value = "";
        }

        function removeTask(button) {
            const listItem = button.parentElement;
            const tasksList = document.getElementById("tasks");
            tasksList.removeChild(listItem);
        }
    </script>
</body>
</html>