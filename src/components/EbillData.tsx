import React, { useEffect, useState } from "react";
import {
  Table,
  Thead,
  Tbody,
  Tr,
  Th,
  Td,
  TableCaption,
  Button,
} from "@chakra-ui/react";
import PaymentForm from "./paymentForm";
import axios from "axios";
import PrintFrom from "./PrintFrom";

const EbillData = () => {
  const [item, setItem] = useState([]);
  useEffect(() => {
    fetch("http://localhost:80/ebill/")
      .then((res) => res.json())
      .then((result) => {
        setItem(result);
      });
  }, []);

  return (
    <Table 
    variant="simple">
      <TableCaption></TableCaption>
      <Thead>
        <Tr>
          <Th>Electricity Bill Id</Th>
          <Th>Bill No.</Th>
          <Th>Meter No.</Th>
          <Th>Consume Unit</Th>
          <Th>Amount</Th>
          <Th>Date</Th>
          <Th>Payment</Th>
          <Th> </Th>
        </Tr>
      </Thead>
      <Tbody>
        {item.map((item) =>
          item.u_id == window.name ? (
            <Tr>
              <Td>{item.e_id}</Td>
              <Td>{item.Bill_No}</Td>
              <Td>{item.Meter_NO}</Td>
              <Td>{item.con_unit}</Td>
              <Td>{item.amount}</Td>
              <Td>{item.date}</Td>
              <Td>{item.pay_info}</Td>
              <Td>
                {item.pay_info === "Not Paid" ? (
                  <PaymentForm bId={item.e_id} bNo={item.date} amount={item.amount} billName={'ELECTRICITY'}>
                    <Button
                      onClick={() => {
                        const paid = "Paid";
                        console.log(window.name);
                        let formData = new FormData();
                        formData.append("userName", window.name);
                        formData.append("paid", paid);
                        const url = "http://localhost:80/ebillUpdate/";
                        axios
                          .post(url, formData)
                          .then((res) => console.log(res.data))
                          .catch((err) => console.log(err));

                          window.location.reload();
                      }}
                      colorScheme="blue"
                      mr={3}
                    >
                      Pay
                    </Button>
                  </PaymentForm>
                ) : (
                  <PrintFrom name={window.name} e_id={item.e_id} billNo={item.Bill_No} date_NO={item.date} amount_NO={item.amount} billName= 'Electricity Bill'/>
                )}
              </Td>
            </Tr>
          ) : (
            ""
          )
        )}
      </Tbody>
    </Table>
  );
};

export default EbillData;
