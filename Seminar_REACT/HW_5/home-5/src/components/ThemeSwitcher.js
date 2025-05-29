import React from "react";
import Switch from "@mui/material/Switch";
import { useDispatch } from "react-redux";
import { toggleTheme } from "./themeSlice";

const label = { inputProps: { "aria-label": "Switch demo" } };

const ThemeSwitcher = () => {
  const dispatch = useDispatch();

  const handleToggleTheme = () => {
    dispatch(toggleTheme());
  };

  return (
    <div>
      <Switch {...label} defaultChecked onChange={handleToggleTheme} />
    </div>
  );
};

export default ThemeSwitcher;
