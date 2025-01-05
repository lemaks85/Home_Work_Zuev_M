import "../index.css";

const Message = (props) => {
    return (
        <div>
            <h3 className="headOne">С помощью "props" </h3>
            <p className="textOne">
                FirstName: {props.firstName} <br />
                LastName: {props.lastName} <br />
                Student: {props.student} <br />
                Group: {props.group}{" "}
            </p>
        </div>
    );
};

export default Message;
