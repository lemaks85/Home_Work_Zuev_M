import React from "react";
import AddTodo from "./components/AddTodo";
import TodoList from "./components/TodoList";
import TodoFilter from "./components/TodoFilter";
import { FilterProvider } from "./contexts/FilterContext";
import GetUsers from "./components/GetUsers";

const App = () => {
  return (
    <div>
      <FilterProvider>
        <AddTodo />
        <TodoList />
        <TodoFilter />
      </FilterProvider>
      <GetUsers />
    </div>
  );
};

export default App;
