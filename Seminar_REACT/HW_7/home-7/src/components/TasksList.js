import React, { useEffect } from "react";
import { useDispatch, useSelector } from "react-redux";
import { getTasks } from "../reducers/tasksSlice";

const TasksList = () => {
  const dispatch = useDispatch();
  const { tasks, loadingStatus } = useSelector((state) => state.tasks);
  
  useEffect(() => {
    console.log(loadingStatus);
    if (loadingStatus === "") {
      dispatch(getTasks());
    }
  }, [loadingStatus, dispatch]);

  return (
    <div>
      <h2>Tasks List</h2>
      {loadingStatus === "loading" && <div>Loading...</div>}
      {loadingStatus === "failed" && <div>Error loading tasks</div>}
      {loadingStatus === "succeeded" && (
        <ul>
          {tasks.map((task) => (
            <li key={task.id}>
              {task.title} - {task.completed ? "Completed" : "In progress"}
            </li>
          ))}
        </ul>
      )}
    </div>
  );
};

export default TasksList;
