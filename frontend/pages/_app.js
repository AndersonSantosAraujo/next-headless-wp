import { ApolloProvider } from "@apollo/client";
import client from "@/src/apollo/client";
import "../src/styles/index.scss";

export default function App({ Component, pageProps }) {
  return (
    <ApolloProvider client={client}>
      <Component {...pageProps} />
    </ApolloProvider>
  );
}
