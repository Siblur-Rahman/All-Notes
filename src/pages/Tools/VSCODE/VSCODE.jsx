import Blog from "../../../shared/Blog";

const VSCODE = () => {
    return (
        <div className="">
            <div className="Some Extensions topic-border">
            <Blog
                topic={'Some Extensions'}
                defineWithIndex={[
                    'Better ReactJS Code Snippet',
                ]}
                index={true}
            />
            </div>
            
        </div>
    );
};

export default VSCODE;