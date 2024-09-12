
const SingleCode = ({code, FileName}) => {
    return (
        <div>
            {FileName && <h2 className="red text-2xl">{FileName}</h2>}
            {code}
        </div>
    );
};

export default SingleCode;