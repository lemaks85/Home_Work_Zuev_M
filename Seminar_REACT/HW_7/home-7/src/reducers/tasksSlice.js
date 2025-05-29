import { createSlice, createAsyncThunk } from "@reduxjs/toolkit";

export const getTasks = createAsyncThunk("getTasks", async () => {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      fetch("/tasks.json")
        .then((response) => response.json())
        .then((data) => resolve(data))
        .catch((error) => reject(error));
    }, 1000);
  });
});

const tasksSlice = createSlice({
  name: "tasks",
  initialState: {
    tasks: [],
    loadingStatus: "",
  },
  reducers: {},
  extraReducers: (builder) => {
    builder
      .addCase(getTasks.pending, (state) => {
        state.loadingStatus = "loading";
      })
      .addCase(getTasks.fulfilled, (state, action) => {
        state.loadingStatus = "succeeded";
        state.tasks = action.payload;
      })
      .addCase(getTasks.rejected, (state, action) => {
        state.loadingStatus = "failed";
      });
  },
});

export default tasksSlice.reducer;
