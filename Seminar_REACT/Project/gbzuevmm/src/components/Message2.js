const Message = ({firstName, lastName, student, group}) => {
    return (
        <div>
            <h3 className="headTwo">С помощью "JSON & PROPS" </h3>
            <p className="textTwo">
                FirstName: {firstName} <br />
                LastName: {lastName} <br />
                Student: {student} <br />
                Group: {group}{" "}
            </p>
        </div>
    );
};

export default Message;
