import { put, takeEvery, call } from 'redux-saga/effects';

function fetchUsersApi() {
  return fetch('https://jsonplaceholder.typicode.com/users')
    .then(response => response.json());
}

function* fetchUsers() {
  try {
    const users = yield call(fetchUsersApi);
    yield put({ type: 'FETCH_USERS_SUCCESS', payload: users });
  } catch (error) {
    yield put({ type: 'FETCH_USERS_FAILURE', error });
  }
}

function* usersSaga() {
  yield takeEvery('FETCH_USERS_REQUEST', fetchUsers);
}

export default usersSaga;
