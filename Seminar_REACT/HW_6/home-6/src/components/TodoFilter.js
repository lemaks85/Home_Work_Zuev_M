import React, { useContext } from "react";
import { FilterContext } from '../contexts/FilterContext';

const TodoFilter = () => {
  const { filter, setFilter } = useContext(FilterContext);

  const handleChange = (e) => {
    setFilter(e.target.value);
  };

  return (
    <select value={filter} onChange={handleChange}>
      <option value="all">ALL</option>
      <option value="completed">COMPLETED</option>
      <option value="active">IN PROGRESS</option>
    </select>
  );
};

export default TodoFilter;
