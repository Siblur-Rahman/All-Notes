import Axios from "./Axios";
import FakeAPI from "./FakeAPI";
import TanStackReackQuery from "./TanStackReackQuery";

const ReactAPI = () => {
    return (
        <div>
            <TanStackReackQuery/>
            <Axios/>
            <FakeAPI/>
        </div>
    );
};

export default ReactAPI;