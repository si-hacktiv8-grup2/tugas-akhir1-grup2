<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To DO List</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap");

    * {
      margin: 0
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding-top: 50px;
      background-color: #e1e3ea;
      height: 100vh;
      font-family: sans-serif;
    }

    .app {
      width: 60%;
    }

    @media (max-width:768px) {
      .app {
        width: 90%;
      }
    }

    .app h1 {
      color: white;
      font-size: 40px;
      padding: 10px 0;
      text-align: center;
      border-radius: .5rem .5rem 0 0;
      background-color: #de3f53;
      font-family: "Rajdhani", sans-serif;
    }

    .app form {
      display: flex;
      width: 100%;
      background-color: #262e4c;
    }

    .app form input {
      border: none;
      background-color: #3c4979;
      font-size: 18px;
      color: white;
      padding: 10px;
      width: 90%;
    }

    .app form button {
      border: none;
      color: white;
      background-color: #1dd2af;
      font-size: 25px;
      font-weight: 600;
      height: 42px;
      width: 10%;
    }

    .app ul {
      list-style: none;
      color: #e0e0e0;
      padding: 0;
    }

    .app ul li {
      padding: 10px;
      background-color: #262e4c;
      border-bottom: 1px solid #3a4674;
    }

    .check {
      width: 0.8em;
      height: 0.8em;
      cursor: pointer;
      border-radius: 50%;
      background-color: white;
      border: 1px solid rgb(255, 255, 255);
      -webkit-appearance: none;
    }

    .check:checked {
      background-color: #1dd2af;
    }

    .task {
      font-size: 18px;
      padding: 0 10px;
      width: fit-content;
      background: transparent;
      border: none;
      color: #fff;
    }

    .task:focus {
      outline: none;
    }

    .app ul li i {
      float: right;
      cursor: pointer;
    }

    .app ul li i:hover {
      color: rgb(255, 82, 82);
    }

    .completed {
      color: rgba(192, 192, 192, 0.8);
      text-decoration: line-through;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="app">
      <h1>TO DO LIST</h1>
      <form>
        <input type="text" placeholder="Add new task...">
        <button type="submit">&plus;</button>
      </form>
      <ul></ul>
    </div>
  </div>
  <script>
    // ketika load halaman, meload semua task localstorage
    window.onload = loadTasks;

    // On form submit add task
    document.querySelector("form").addEventListener("submit", e => {
      e.preventDefault();
      addTask();
    });

    function loadTasks() {
      // check if localStorage has any tasks
      // if not then return
      if (localStorage.getItem("tasks") == null) return;

      // Get the tasks from localStorage and convert it to an array
      let tasks = Array.from(JSON.parse(localStorage.getItem("tasks")));

      // Loop through the tasks and add them to the list
      tasks.forEach(task => {
        const list = document.querySelector("ul");
        const li = document.createElement("li");
        li.innerHTML = `<input type="checkbox" onclick="taskComplete(this)" class="check" ${task.completed ? 'checked' : ''}>
          <input type="text" value="${task.task}" class="task ${task.completed ? 'completed' : ''}" onfocus="getCurrentTask(this)" onblur="editTask(this)">
          <i class="fa fa-trash" onclick="removeTask(this)"></i>`;
        list.insertBefore(li, list.children[0]);
      });
    }

    function addTask() {
      const task = document.querySelector("form input");
      const list = document.querySelector("ul");
      // return if task is empty
      if (task.value === "") {
        alert("Please add some task!");
        return false;
      }
      // check is task already exist
      if (document.querySelector(`input[value="${task.value}"]`)) {
        alert("Task already exist!");
        return false;
      }

      // add task to local storage
      localStorage.setItem("tasks", JSON.stringify([...JSON.parse(localStorage.getItem("tasks") || "[]"), { task: task.value, completed: false }]));

      // create list item, add innerHTML and append to ul
      const li = document.createElement("li");
      li.innerHTML = `<input type="checkbox" onclick="taskComplete(this)" class="check">
      <input type="text" value="${task.value}" class="task" onfocus="getCurrentTask(this)" onblur="editTask(this)">
      <i class="fa fa-trash" onclick="removeTask(this)"></i>`;
      list.insertBefore(li, list.children[0]);
      // clear input
      task.value = "";
    }

    function taskComplete(event) {
      let tasks = Array.from(JSON.parse(localStorage.getItem("tasks")));
      tasks.forEach(task => {
        if (task.task === event.nextElementSibling.value) {
          task.completed = !task.completed;
        }
      });
      localStorage.setItem("tasks", JSON.stringify(tasks));
      event.nextElementSibling.classList.toggle("completed");
    }

    function removeTask(event) {
      let tasks = Array.from(JSON.parse(localStorage.getItem("tasks")));
      tasks.forEach(task => {
        if (task.task === event.parentNode.children[1].value) {
          // delete task
          tasks.splice(tasks.indexOf(task), 1);
        }
      });
      localStorage.setItem("tasks", JSON.stringify(tasks));
      event.parentElement.remove();
    }

    // store current task to track changes
    var currentTask = null;

    // get current task
    function getCurrentTask(event) {
      currentTask = event.value;
    }

    // edit the task and update local storage
    function editTask(event) {
      let tasks = Array.from(JSON.parse(localStorage.getItem("tasks")));
      // check if task is empty
      if (event.value === "") {
        alert("Task is empty!");
        event.value = currentTask;
        return;
      }
      // task already exist
      tasks.forEach(task => {
        if (task.task === event.value) {
          alert("Task already exist!");
          event.value = currentTask;
          return;
        }
      });
      // update task
      tasks.forEach(task => {
        if (task.task === currentTask) {
          task.task = event.value;
        }
      });
      // update local storage
      localStorage.setItem("tasks", JSON.stringify(tasks));
    }
  </script>
</body>

</html>