import { useState } from "react";

function CommentsList() {
  const [сommentsList, setCommentsList] = useState([]);
  const [сomment, setComment] = useState("");
  const [deletedComments, setDeletedComments] = useState([]);
  const [commentId, setCommentId] = useState(1);

  const updateId = () => {
    setCommentId(commentId + 1);
  };

  const addComment = (event) => {
    event.preventDefault();
    if (!сomment.trim()) return;
    setCommentsList([...сommentsList, { id: commentId, text: сomment }]);
    updateId();
    setComment("");
  };

  const deleteComment = (id) => {
    setDeletedComments((prevDeletedComments) => {
      return [...prevDeletedComments, id];
    });
  };

  return (
    <div className="Common">
      <div className="comments__add_box">
        <input
          className="comments__add_field"
          type="text"
          placeholder="Ввидите текст"
          value={сomment}
          onChange={(event) => setComment(event.target.value)}
        ></input>
        <button className="btnAddComment" onClick={addComment}>
          Добавить
        </button>
      </div>
      <div className="comments__list_box">
        <ul className="comments__list_items">
          {сommentsList
            .filter((comment) => !deletedComments.includes(comment.id))
            .map((comment) => (
              <li className="comments__item" key={comment.id}>
                <p className="comments__content">{comment.text}</p>
                <button
                  className="comments__button"
                  onClick={() => deleteComment(comment.id)}
                >
                  Удалить
                </button>
              </li>
            ))}
        </ul>
      </div>
    </div>
  );
}

export default CommentsList;